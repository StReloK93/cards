import { createStore } from 'vuex'
import axios from '../modules/axios'
import router from '../router'
interface state {
    user?: Object | null,
    selected?: Object | null,
    openCardAdd?: boolean,

}
export default createStore({
    state(): state {
        return {
            user: null,
            selected: null,
            openCardAdd: false,
        }
    },
    mutations: {
        setUser(state, user) {
            state.user = user
        },
    },
    actions: {

        async login({ state, dispatch }, data) {
            const result = await axios.post('login', data)

            if (result.status == 299) return result.data
            else {
                localStorage.setItem('token', `${result.data.type} ${result.data.token}`) // local
                await dispatch('getUser')
                
                router.push({ name: 'home' })
            }
        },
        async register({ dispatch }, props) {
            const result = await axios.post('register', props)
            
            if (result.status == 200) {
                dispatch('login', props)
                return result
            }
            else if(result.status == 299){
                return result
            }
        },
        async logout({ commit }) {
            const data = await axios.get('logout')
            if (data.status == 200) {
                axios.defaults.headers.common['Authorization'] = null
                localStorage.removeItem('token')
                commit('setUser', null)
                router.push({ name: 'login' })
            }
        },

        async getUser({ commit }) {
            axios.defaults.headers.common['Authorization'] = localStorage.getItem('token')
            await axios.get('user').then((res) => {
                commit('setUser', res.data);
            }).catch(() => { console.clear() })
        },
    },
})
