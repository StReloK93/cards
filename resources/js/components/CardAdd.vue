<template>
    <section @click="state.openCardAdd = false" class="absolute top-0 left-0 h-full w-full bg-black bg-opacity-70 z-50 p-4 flex justify-center">
        <form @click.stop class="w-[1024px] h-full bg-white rounded-sm shadow-md flex flex-col p-3" @submit.prevent="$emit('addCard' , formData)">
            <div class="text-right -m-3 mb-0 bg-gray-200">
                <button @click="state.openCardAdd = false" class="p-2 hover:bg-red-400 active:bg-gray-300 active:shadow rounded-sm">
                    <img src="/images/close.svg" class="w-4">
                </button>
            </div>
            <main class="flex flex-grow overflow-hidden overflow-y-auto">
                <aside class="w-1/2 pr-2  pt-4">
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt1" v-model="formData.TABN" class="material-input peer" placeholder=" "/>
                        <label for="inpt1" class="material-label">Табельный номер</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt2" v-model="formData.FIO" class="material-input peer" placeholder=" "/>
                        <label for="inpt2"  class="material-label">ФИО</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt3" v-model="formData.SEX" class="material-input peer" placeholder=" "/>
                        <label for="inpt3" class="material-label">Пол</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt4" type="date" v-model="formData.DATAR" class="material-input peer" placeholder=" "/>
                        <label for="inpt4" class="material-label">Дата рождения</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt30" v-model="formData.MESTOR" class="material-input peer" placeholder=" "/>
                        <label for="inpt30" class="material-label">Место рождения</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt5" v-model="formData.NATION" class="material-input peer" placeholder=" "/>
                        <label for="inpt5" class="material-label">Национальность</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt6" v-model="formData.VIDOBRAZ" class="material-input peer" placeholder=" "/>
                        <label for="inpt6" class="material-label">Оброзование</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt7" v-model="formData.UCHZAV" class="material-input peer" placeholder=" "/>
                        <label for="inpt7" class="material-label">Наименование учебного заведения</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt8" v-model="formData.FORMAUCH" class="material-input peer" placeholder=" "/>
                        <label for="inpt8" class="material-label">Форма обучения</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt9" v-model="formData.SPECOBR" class="material-input peer" placeholder=" "/>
                        <label for="inpt9" class="material-label">Специалность</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt10" v-model="formData.POSLMESTO" class="material-input peer" placeholder=" "/>
                        <label for="inpt10" class="material-label">Последнее место работы</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt11" v-model="formData.SEM_POL" class="material-input peer" placeholder=" "/>
                        <label for="inpt11" class="material-label">Семейное положение</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt12" v-model="formData.ADRES" class="material-input peer" placeholder=" "/>
                        <label for="inpt12" class="material-label">Адрес</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt13" v-model="formData.PASPNOM" class="material-input peer" placeholder=" "/>
                        <label for="inpt13" class="material-label">Паспорт</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt14" v-model="formData.PASPKEM" class="material-input peer" placeholder=" "/>
                        <label for="inpt14" class="material-label">Кем выдан</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt15" v-model="formData.STRANA" class="material-input peer" placeholder=" "/>
                        <label for="inpt15" class="material-label">Страна</label>
                    </div>
                </aside>


                <aside class="w-1/2 pl-2 pt-4">

                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt16" v-model="formData.PASPKOGDA" class="material-input peer" placeholder=" "/>
                        <label for="inpt16" class="material-label">Дата выдачи</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt17" v-model="formData.PASPDEYST" class="material-input peer" placeholder=" "/>
                        <label for="inpt17" class="material-label">Срок Паспорта</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt18" v-model="formData.UCHAST_CHS" class="material-input peer" placeholder=" "/>
                        <label for="inpt18" class="material-label">Участя в ЧС</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt19" v-model="formData.V_GRUCHETA" class="material-input peer" placeholder=" "/>
                        <label for="inpt19" class="material-label">Группа учета</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt20" v-model="formData.V_KAT" class="material-input peer" placeholder=" "/>
                        <label for="inpt20" class="material-label">Категории</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt21" v-model="formData.V_SOSTAV" class="material-input peer" placeholder=" "/>
                        <label for="inpt21" class="material-label">Состав</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt22" v-model="formData.V_ZVANIE" class="material-input peer" placeholder=" "/>
                        <label for="inpt22" class="material-label">Звания</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt23" v-model="formData.V_VUSNOM" class="material-input peer" placeholder=" "/>
                        <label for="inpt23" class="material-label">Вус номер</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt24" v-model="formData.V_GODNOST" class="material-input peer" placeholder=" "/>
                        <label for="inpt24" class="material-label">Годность</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group flex leading-none">
                        <main class="w-11/12">
                            <input id="inpt25" v-model="formData.V_ODO" class="material-input peer" placeholder=" "/>
                            <label for="inpt25" class="material-label">ОДО</label>
                        </main>
                        <main class="w-1/12 text-center">
                            <div class="text-xs text-gray-500 relative -top-2">Брон</div>
                            <input id="inpt34" type="checkbox" v-model="formData.bron"/>
                        </main>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt26" v-model="formData.DATAPRIEM" class="material-input peer" placeholder=" "/>
                        <label for="inpt26" class="material-label">Дата приема</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt27" v-model="formData.PODRAZD" class="material-input peer" placeholder=" "/>
                        <label for="inpt27" class="material-label">Подразделения</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt28" v-model="formData.PROF" class="material-input peer" placeholder=" "/>
                        <label for="inpt28" class="material-label">Профессия</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt29" v-model="formData.RAZRYAD" class="material-input peer" placeholder=" "/>
                        <label for="inpt29" class="material-label">Разряд</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt32" v-model="formData.leavetext" class="material-input peer" placeholder=" "/>
                        <label for="inpt32" class="material-label">Причина уволнение</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <input id="inpt31" type="date" v-model="formData.desc_time" class="material-input peer" placeholder=" "/>
                        <label for="inpt31" class="material-label">Дата уволнение</label>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">

                    </div>
                </aside>

            </main>
            <div class="text-right pt-2">
                <button @click="" class="bg-teal-500 text-white py-1.5 px-3 rounded-sm shadow-md active:bg-teal-400 active:shadow">
                    + Добавить
                </button>
            </div>
        </form>
    </section>
</template>

<script setup lang="ts">
import { reactive } from 'vue'
import { useStore } from 'vuex'
const { state } = useStore()

const formData = reactive({
    TABN: "",
    FIO: "",
    SEX: "",
    DATAR: "",
    MESTOR: "",
    NATION: "",
    VIDOBRAZ: "",
    UCHZAV: "",
    FORMAUCH: "",
    SPECOBR: "",
    POSLMESTO: "",
    SEM_POL: "",
    ADRES: "",
    PASPNOM: "",
    PASPKEM: "",
    STRANA: "",
    PASPKOGDA: "",
    PASPDEYST: "",
    UCHAST_CHS: "",
    V_GRUCHETA: "",
    V_KAT: "",
    V_SOSTAV: "",
    V_ZVANIE: "",
    V_VUSNOM: "",
    V_GODNOST: "",
    V_ODO: "",
    DATAPRIEM: "",
    PODRAZD: "",
    PROF: "",
    RAZRYAD: "",
    leavetext: "",
    desc_time: "",
    bron: false,
})
</script>


<style scoped>
/* Firefox */
* {
  scrollbar-width: thin;
  scrollbar-color: #255875 #EBEBEB;
}

/* Chrome, Edge and Safari */
*::-webkit-scrollbar {
  width: 4px;
  width: 4px;
}
*::-webkit-scrollbar-track {
  border-radius: 2px;
  background-color: #EBEBEB;
}

*::-webkit-scrollbar-track:hover {
  background-color: #587FC2;
}

*::-webkit-scrollbar-track:active {
  background-color: #6886C2;
}

*::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background-color: #255875;
}

*::-webkit-scrollbar-thumb:hover {
  background-color: #62A34B;
}

*::-webkit-scrollbar-thumb:active {
  background-color: #62A34B;
}
</style>