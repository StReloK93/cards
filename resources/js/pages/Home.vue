<template>
    <section class="flex justify-between flex-col h-full">
        <TransitionGroup name="fade">
            <CardAddVue @addCard="addCard" v-if="state.openCardAdd"></CardAddVue>
            <CardEditVue @editCard="editCard" v-if="state.editpage"></CardEditVue>
            <PasswordReset v-if="password" @click="password = false" @close="password = false" class="fixed top-0 left-0 z-[100] w-full h-full bg-black  bg-opacity-50"></PasswordReset>
        </TransitionGroup>
        <div class="h-16 bg-gray-100 p-3 flex justify-between items-center">
            <h2 class="flex items-center"><img src="/images/karto.svg" class="w-10"> Харбий хисобни юритиш буйича картотека </h2>
            <main>
                <button @click="password = true" class="underline py-1.5 px-2">
                    Изменить пароль
                </button>
                <button class="underline py-1.5 px-2" @click="dispatch('logout')">
                    Выйти
                </button>
            </main>
        </div>
        <DxDataGrid 
            class="flex-grow" 
            :data-source="source" 
            ref="dataGridRef"
            @row-prepared="addRowClasses"
            :column-auto-width="true"
            @focused-row-changed="(event:any) => state.selected = event.row.data" :focused-row-enabled="true" :height="100"
            @exporting="onExporting"
        >
            <DxColumnChooser :enabled="true" />
            <DxPaging :page-size="15" />
            <DxSearchPanel :visible="true" />
            <DxSelection mode="multiple" />
            <DxExport :enabled="true" :allow-export-selected-data="true" />
            <DxHeaderFilter :visible="true" />
            <DxColumn data-field="ID"                   caption="№" :allowHeaderFiltering="false" />
            <DxColumn data-field="TABN"         caption="Табелный" :allowHeaderFiltering="true" />
            <DxColumn data-field="leavetext"   caption="Причина уволнение"/>
            <DxColumn data-field="desc_time"    caption="Дата уволнение"  :customize-text="infoDatar"/>

            <DxColumn data-field="FIO"          caption="ФИО"/>
            <DxColumn data-field="SEX"          caption="Пол" />
            <DxColumn data-field="DATAR"        caption="Дата рож" :customize-text="infoDatar"/>
            <DxColumn data-field="MESTOR"       caption="Место рож" />
            <DxColumn data-field="NATION"       caption="Национальность" />
            <DxColumn data-field="VIDOBRAZ"     caption="Оброзование"/>
            <DxColumn data-field="UCHZAV"       caption="Наименование учебного заведения"/>
            <DxColumn data-field="bron"         caption="спец. Учету" :customize-text="brontext"/>

            <!-- VOENNIY -->
            <DxColumn data-field="UCHAST_CHS"   caption="Участя в ЧС" />
            <DxColumn data-field="V_GRUCHETA"   caption="Группа учета" />
            <DxColumn data-field="V_KAT"        caption="Категории" />
            <DxColumn data-field="V_SOSTAV"     caption="Состав" />
            <DxColumn data-field="V_ZVANIE"     caption="Звания" />
            <DxColumn data-field="V_VUSNOM"     caption="Вус номер" />
            <DxColumn data-field="V_GODNOST"    caption="Годность" />
            <DxColumn data-field="V_ODO"        caption="ОДО" />

            <DxColumn data-field="FORMAUCH"     caption="Форма обучения" />
            <DxColumn data-field="SPECOBR"      caption="Специалность"/>
            <DxColumn data-field="POSLMESTO"    caption="Последнее место работы"/>
            <DxColumn data-field="SEM_POL"      caption="Семейное положение"/>
            <DxColumn data-field="ADRES"        caption="Адрес"/>

            <!-- Pasport -->
            <DxColumn data-field="PASPNOM"      caption="Паспорт"/>
            <DxColumn data-field="PASPKEM"      caption="Кем выдан"/>
            <DxColumn data-field="STRANA"       caption="Страна"/>
            <DxColumn data-field="PASPKOGDA"    caption="Дата выдачи"/>
            <DxColumn data-field="PASPDEYST"    caption="Срок до"/>




            <DxColumn data-field="DATAPRIEM"    caption="Дата приема" />
            <DxColumn data-field="PODRAZD"      caption="Подразделения" />
            <DxColumn data-field="PROF"         caption="Профессия" />
            <DxColumn data-field="RAZRYAD"      caption="Разряд" />
        </DxDataGrid>
        <div class="h-16 bg-gray-100 p-3 flex justify-between items-center">
            <div>
                <button title="ctrl+p" :disabled="state.selected == null" @click="print()" :class="{'opacity-50': state.selected == null}" class="inline-flex items-center bg-gray-200 py-1.5 px-3 rounded-sm shadow-md active:bg-teal-600 active:shadow active:text-white">
                    <img src="/images/print.svg" class="w-6 mr-2">
                    Печать
                </button>
                <button title="" :disabled="state.selected == null" @click="state.editpage = true" :class="{'opacity-50': state.selected == null}" class="inline-flex items-center mx-5 bg-gray-200 py-1.5 px-3 rounded-sm shadow-md active:bg-teal-600 active:shadow active:text-white">
                    <img src="/images/edit.svg" class="w-6 mr-2">
                    Изменить
                </button>
                <button title="" :disabled="state.selected == null" @click="deleteCard(state.selected)" :class="{'opacity-50': state.selected == null}" class="inline-flex items-center bg-gray-200 py-1.5 px-3 rounded-sm shadow-md active:bg-teal-600 active:shadow active:text-white">
                    <img src="/images/delete.svg" class="w-6 mr-2">
                    Удалить
                </button>
            </div>

            <button @click="state.openCardAdd = true" class="bg-teal-500 text-white py-1.5 px-3 rounded-sm shadow-md active:bg-teal-400 active:shadow">
                <span class="mr-2">+</span> Вводить
            </button>
        </div>
    </section>
</template>

<script setup lang="ts">
import moment from 'moment'
import CardAddVue from '../components/CardAdd.vue'
import CardEditVue from '../components/CardEdit.vue'
import { DxDataGrid, DxColumn, DxPaging, DxSearchPanel,  DxExport, DxSelection, DxColumnChooser, DxHeaderFilter } from 'devextreme-vue/data-grid'
import { print , onExporting } from '../modules/print'
import DataSource from 'devextreme/data/data_source';
import ArrayStore from 'devextreme/data/array_store';
import Swal from 'sweetalert2'
import PasswordReset from '../components/PasswordReset.vue'

import { ref } from 'vue'
import axios from 'axios'
import { useStore } from 'vuex'
const { state , dispatch } = useStore()

const password = ref(false)
const source = ref()
const dataGridRef: any = ref()

axios.get('/cards').then((res) => {
    source.value = new DataSource({
        store: new ArrayStore({data: res.data, key: 'ID'})
    })
})

function addCard(formData: Object){
    axios.post('/cards', formData).then((res) => {
        source.value.store().push([
            { type: "insert", data: res.data , newRowPosition: 'viewportTop', index: 0}
        ])
        state.openCardAdd = false
    })
}

function editCard(formData: any){
    axios.put(`/cards/${formData.ID}`, formData).then(() => {
        source.value.store().update(formData.ID, formData)
        state.editpage = false
    })
}


function addRowClasses(element:any){
    if(element.data == null) return
    if(element.data.desc_time != null) element.rowElement.classList.add('bg-red-100')
}



function deleteCard(formData: any){
    Swal.fire({
        title: 'Точно хотите удалить?',
        text: "После удаление информацию не возможно восстоновить!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Да',
        cancelButtonText: 'Нет'
    }).then((result) => {
        if (result.isConfirmed) {
            const arrayStore = source.value.store()
            const dataGrid = dataGridRef.value.instance
            
            arrayStore.remove(formData.ID).then(() => {
                dataGrid.refresh()
                axios.delete(`/cards/${formData.ID}`).then(() => {
                    state.editpage = false
                })
            })
        }
    })
}


function infoDatar(cellInfo: any){
    if(cellInfo.value == null ) return ""

    if(cellInfo.value.includes('-')) return moment(cellInfo.value, 'YYYY-MM-DD').format("DD.MM.YYYY")
    return moment(cellInfo.value, 'DD-MM-YYYY').format("DD.MM.YYYY")
}

function brontext(cellInfo: any){
    if(cellInfo.value == null ||  cellInfo.value == false) return ""
    else return 'БРОН'
}
</script>
<!-- // function onValueChanged(select: any) {
    //     const dataGrid = dataGridRef.value.instance
    //     const value = select.value
        
    //     if (value === 'All') dataGrid.clearFilter()
    //     else dataGrid.filter(['DATAR', 'contains', value])
    // } -->
    