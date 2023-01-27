<template>
    <section class="text-gray-600 flex justify-center items-center">
        <header @click.stop class="w-96 bg-white p-6">
            <main class="-mt-3 mb-3">
                <h3 class="capitalize tracking-wider text-xl text-center font-semibold">
                    Форма изменение пароля
                </h3>
            </main>
            <!-- shapka -->

            <!-- menu -->
            <form @submit.prevent="passwordReset">
                <div v-if="errors.message" class="text-red-500 flex justify-between items-center">
                    <span>
                        {{ errors.message }}
                    </span>
                    <span @click="errors.message = null">
                        <i class="fal fa-times"></i>
                    </span>
                </div>
                <div v-if="errors.new" class="flex justify-between items-center text-red-500">
                    <section>
                        <main v-for="error in errors.new" :key="error" class="w-full">
                            <span>
                                {{ error }}
                            </span>
                        </main>
                    </section>
                    <span @click="errors.new = null">
                        <i class="fal fa-times"></i>
                    </span>
                </div>
                <div>
                    <label for="oldPassword" class="text-gray-400 text-xs">Текущий пароль</label>
                    <input id="oldPassword" minlength="6" v-model="pass.old" type="password" required
                        class="w-full flex-1 py-1 bg-transparent border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                </div>
                <div>
                    <label for="newPassword" class="text-gray-400 text-xs">Новый пароль</label>
                    <input id="newPassword" minlength="6" v-model="pass.new" type="password" required
                        class="w-full flex-1 py-1 bg-transparent border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                </div>
                <div>
                    <label for="newPassword_confirm" class="text-gray-400 text-xs">Подтвердите Новый пароль</label>
                    <input id="newPassword_confirm" minlength="6" v-model="pass.new_confirmation" type="password"
                        required
                        class="w-full flex-1 py-1 bg-transparent border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                </div>
                <div class="mt-3">
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white uppercase rounded-sm shadow">
                        Обновить пароль
                    </button>
                </div>
            </form>
        </header>
        <!-- shapka -->

    </section>
</template>

<script setup lang="ts">
import { ref, Ref } from 'vue'
import axios from '../modules/axios'
import Swal from 'sweetalert2';
const password = ref(false)
const pass: Ref = ref({})
const emit = defineEmits(['close'])
const errors = ref({
    message: null,
    new: null,
})


async function passwordReset() {
    const result = await axios.post('/passwordreset', pass.value)
    if (result.data == 1) {
        Swal.fire({
            icon: 'success',
            title: "Пароль обновлено",
            showConfirmButton: false,
            timer: 1500
        })
        emit('close')
        pass.value.old = ""
        pass.value.new = ""
        pass.value.new_confirmation = ""

        password.value = false
        errors.value.message = null
        errors.value.new = null
    }
    else {
        errors.value.message = result.data.message
        errors.value.new = result.data.new
    }
}


</script>