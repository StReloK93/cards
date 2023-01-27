<template>
	<section class="flex flex-col h-full fixed top-0 left-0 w-full">
		<main class="flex-grow flex items-center justify-center">
			<form class="w-1/2 shadow-2xl flex" @submit.prevent="login">
				<section class="w-1/2 loginback text-center font-bold text-white"></section>
					
				<section class="p-8 w-1/2 bg-white">
					<h3 class="text-gray-900 text-2xl text-center mb-8">Войти в картотеку</h3>
					<p v-if="errors" class="text-center text-red-500 text-sm">
						{{errors}}
					</p>
					<div class="mb-2">
						<label for="number" class="text-gray-400 text-xs">Логин</label>
						<input id="number" type="text" v-model="form.phone" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div class="mb-2">
						<label for="password" class="text-gray-400 text-xs">Пароль</label>
						<input id="password" type="password" minlength="6" v-model="form.password" autocomplete="off" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div class="flex text-sm justify-between mt-8">
						<button type="submit" class="bg-green-600 hover:bg-green-400 transition duration-150 shadow-xl w-full text-white p-2">Войти</button>
					</div>
				</section>
			</form>
		</main>
	</section>
</template>
<script setup lang="ts">
import { ref } from "vue"
import { useStore } from "vuex"
const store = useStore()
const form: any = ref({
	phone: "",
	password: "",
})

const errors = ref(null)

async function login(){
	const result = await store.dispatch('login', form.value)
	
	if(result) errors.value = result.message
	else errors.value = null
}
</script>
<style scoped>
.loginback{
	background: url('/images/register.jpg') no-repeat;
	background-size: cover;
	background-position: center;
}
</style>