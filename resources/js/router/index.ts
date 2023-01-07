import { createRouter, createWebHistory } from 'vue-router'
import routes from './routes'
import store from '../store'
const router = createRouter({
	history: createWebHistory(),
	routes
})

router.beforeEach((to, from, next) => {
	if (store.state.user) {
		if (to.matched.some(route => route.meta.guard === 'guest')) next({ name: 'home' })
		else next();

	} else {
		if (to.matched.some(route => route.meta.guard === 'auth')) next({ name: 'login' })
		else next();
	}
})
export default router;

