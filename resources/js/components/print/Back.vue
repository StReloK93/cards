<template>
    <section name="page" class="w-[297mm] h-[209mm] bg-white flex text-[12px] p-3">
        <main class="w-full">
            <table class="w-full text-center">
                <tr class="text-sm">
                    <td class="border-table" colspan="2">Дата</td>
                    <td class="border-table" colspan="3">Подразделение</td>
                    <td class="border-table" colspan="3">Профессия (Должность)</td>
                    <td class="border-table text-xs leading-none py-0.5" colspan="2">
                        <div>43 разряд</div>
                        <div>44 оклад</div>
                        <div>вписать</div>
                    </td>
                    <td class="border-table" colspan="2">Категория</td>
                    <td class="border-table text-xs" colspan="2">
                        <div>Вид</div>
                        <div>Работ по деят</div>
                    </td>
                    <td class="border-table" colspan="2">Основание</td>
                </tr>
                <tr>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-12">Код</td>
                    <td class="border-table w-40">Наименование</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-16">Код</td>
                    <td class="border-table w-[210px]">Наименование</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table">Код</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-20">Код</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-14">Код</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-14">Код</td>
                    <RecvisitVue></RecvisitVue>
                    <td class="border-table w-20">Код</td>
                </tr>
                <Rows v-for="rand in 15" :numb="rand" :selected="selected"></Rows>
            </table>
            <main class="flex">
                <FirstBottomTable></FirstBottomTable>
                <SecondBottomTable></SecondBottomTable>
                <ThreeBottomTable></ThreeBottomTable>
            </main>
            <div class="h-[38px] flex items-center text-sm">
                <span class="ml-10">Подпись работника ОК</span>
                <div class="border-b border-gray-600 w-64 h-4"></div>
                "
                <div class="border-b border-gray-600 w-16 h-4"></div>
                "
                <div class="border-b border-gray-600 w-44 h-4 mr-2"></div>
                г.
                <div class="ml-16">
                    Ознакомлен
                </div>
                <div class="border-b border-gray-600 w-52 h-4 mr-2"></div>
            </div>
        </main>
    </section>
</template>
<script setup lang="ts">
import RecvisitVue from './Recvisit.vue';
import Rows from './Rows.vue';
import FirstBottomTable from './FirstBottomTable.vue';
import SecondBottomTable from './SecondBottomTable.vue';
import ThreeBottomTable from './ThreeBottomTable.vue';

const { selected } = defineProps(['selected'])
</script>
<style>
#printPage {
    font-family: 'Times New Roman', Times, serif;
    font-weight: 500;
}
</style>