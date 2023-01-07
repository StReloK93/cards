export default [
	{
		path: '/',
		component: () => import('../pages/Home.vue'),
		name: 'home',
		meta: {
			guard: 'auth'
		},
	},
	{
		path: '/login',
		component: () => import('../pages/Login.vue'),
		name: 'login',
		meta: {
			guard: 'guest'
		}
	}
];