<template>
    <section name="page" class="w-[297mm] h-[209mm] bg-white flex text-[12px]">
        <main class="w-1/2 pr-2">
            <table class="w-full">
                <tr class="leading-1">
                    <td rowspan="4" class="border-table w-6 p-0">
                        <div class="flex items-center justify-center text-center w-8">
                            <span class="-rotate-90 inline-block text-sm leading-none">
                                Стаж <br> работы
                            </span>
                        </div>
                    </td>
                    <td class="border-table px-1 py-0.5">Непрерывный</td>
                    <td class="border-table px-1 py-0 text-center">19</td>
                    <td class="border-table px-1 py-0 w-24"></td>
                </tr>
                <tr class="leading-4">
                    <td rowspan="2" class="border-table px-1">Общий</td>
                    <td class="border-table px-1 text-center">
                        <div class="inline-block">20</div>
                    </td>
                    <td class="border-table px-1  w-24"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table px-1 opacity-0"> Strelok</td>
                    <td class="border-table px-1 w-24"></td>
                </tr>
                <tr class="leading-none">
                    <td class="border-table px-1 py-0.5">Непрерывный <br> на предприятии</td>
                    <td class="border-table px-1 text-center">21</td>
                    <td class="border-table px-1  w-24"></td>
                </tr>
                <tr class="leading-1">
                    <td rowspan="2" class="border-table w-6 px-0 py-3">
                        <div class="flex items-center justify-center text-center w-8">
                            <span class="-rotate-90 inline-block text-sm leading-none">
                                Профе <br> ссия
                            </span>
                        </div>
                    </td>
                    <td class="border-table px-1 py-0">Основания</td>
                    <td class="border-table px-1 py-0 text-center">22</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table px-1 py-0">Дополнительная</td>
                    <td class="border-table px-1 py-0 text-center">23</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1 border-b-2 border-gray-600">
                    <td colspan="2" class="border-table px-1 h-[28px] leading-none">
                        <span>
                            Последнее место работы:   
                        </span>
                        
                        <div class="contents font-bold" v-html="selected.POSLMESTO"></div>
                    </td>
                    <td class="border-table px-1 py-0 text-center">24</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-0 h-2"></td>
                </tr>
                <tr class="leading-1 border-y-2 border-gray-600">
                    <td colspan="2" class="border-table px-1 py-5">
                        Должность, дата и причина увольнения 
                        <span class="inline-block w-32 border-b border-gray-600"></span>
                    </td>
                    <td class="border-table px-1 py-0 text-center">25</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-0 h-2"></td>
                </tr>
                <tr class="leading-1 border-t-2 border-gray-600">
                    <td colspan="2" class="border-table px-1 py-4">
                        Семейной положение
                        <span class="inline-block underline px-2">{{ selected.SEM_POL }}</span>
                    </td>
                    <td class="border-table px-1 py-0 text-center">26</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="2" class="border-table px-1 h-[59px]">
                        <div class="leading-1">
                            <span>Паспорт: серия </span>
                            <span v-if="selected.PASPNOM" class="inline-block underline px-2 font-bold">{{ selected.PASPNOM.split(' ')[0] }}</span>
                            №
                            <span v-if="selected.PASPNOM" class="inline-block underline px-2 font-bold">{{ selected.PASPNOM.split(' ')[1] }}</span>
                        </div>
                        <div class="leading-none py-0.5">
                           
                            <span>Кем выдан </span>
                            <span class="inline-block underline font-bold">{{ selected.PASPKEM }}</span>
                        </div>
                        <div class="pr-2">
                            <span>Дата выдачи: </span>
                            <span v-if="selected.PASPKOGDA" class="inline-block underline font-bold">{{ selected.PASPKOGDA.replace(/..\B/g, '$&.')}}</span>"
                            <span class="inline-block w-28"></span>
                        </div>
                    </td>
                    <td class="border-table px-1 py-0 text-center">27</td>
                    <td rowspan="3" class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="2" class="border-table h-[35px] leading-[1.2]">
                        <span>
                            Домашний адрес индекс:
                        </span>
                        <span class="font-bold contents text-[9px]">{{ selected.ADRES }}</span>
                    </td>
                    <td rowspan="2" class="border-table px-1 py-0 text-center">28</td>
                </tr>
                <tr class="leading-1 border-b-2 border-gray-600">
                    <td colspan="2" class="border-table pt-2 pb-1 text-right leading-none">
                        телефон
                        <span class="inline-block w-40 border-b border-gray-600"></span>
                    </td>
                </tr>

<!-- --------------------------------------------------------- -->

                <!-- Vaenniy -->
                <tr class="leading-1">
                    <td rowspan="9" class="border-table w-6 p-0">
                        <div class="flex items-center justify-center text-center w-8">
                            <span class="-rotate-90 inline-block text-sm leading-none whitespace-nowrap">
                                Сведения воинскому учете
                            </span>
                        </div>
                    </td>
                    <td class="border-table px-1 py-0">
                        <div>Участие в ВОВ и боевых <span class="font-bold ml-4 text-xs">{{ selected.UCHAST_CHS }}</span></div>
                        <div>действиях в Афганистане</div>
                    </td>
                    <td class="border-table px-1 py-0 text-center">29</td>
                    <td class="border-table px-1 py-0 text-center leading-none"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table pt-3 pb-1 px-1">Группа учёта: <span class="font-bold">{{ selected.V_GRUCHETA }}</span></td>
                    <td class="border-table px-1 py-0 text-center">30</td>
                    <td class="border-table px-1 py-0 text-center capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table py-1 px-1">Категория учёта <span class="font-bold capitalize">{{ selected.V_KAT }}</span></td>
                    <td class="border-table px-1 py-0 text-center">31</td>
                    <td class="border-table px-1 py-0 text-center capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table py-1 px-1">Состав: <span class="font-bold capitalize">{{ selected.V_SOSTAV }}</span></td>
                    <td class="border-table px-1 py-0 text-center">32</td>
                    <td class="border-table px-1 py-0 text-center leading-none capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table py-1 px-1">Воинское звание: <span class="font-bold capitalize">{{ selected.V_ZVANIE }}</span></td>
                    <td class="border-table px-1 py-0 text-center">33</td>
                    <td class="border-table px-1 py-0 text-center capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table py-1 px-1">ВУС №: <span class="font-bold capitalize">{{ selected.V_VUSNOM }}</span></td>
                    <td class="border-table px-1 py-0 text-center">34</td>
                    <td class="border-table px-1 py-0 text-center capitalize"></td>
                </tr>
                <tr class="leading-none h-[27px]">
                    <td class="border-table px-1 py-0">Годность к военной службе <span class="font-bold">{{ selected.V_GODNOST }}</span> </td>
                    <td class="border-table px-1 py-0 text-center">35</td>
                    <td class="border-table px-1 py-0 text-center leading-none "></td>
                </tr>
                <tr class="leading-1">
                    <td class="border-table px-1 py-[1px] leading-none h-[27px]">
                        <span>
                            Отношение к воинскому спец. Учету: <span class="font-bold" v-if="selected.bron == '1'">Брон</span>
                        </span>
                        <div class="font-bold">
                            {{ selected.V_ODO.substr(0, 50) }}
                        </div>
                    </td>
                    <td class="border-table px-1 py-0 text-center">36</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1 border-b-2 border-gray-600">
                    <td class="border-table py-1 px-1">Наименование военкомата по месту жительства</td>
                    <td class="border-table px-1 py-0 text-center">37</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="2" class="border-table px-1 pt-2">
                        Зачислен на работу с <span v-if="selected.DATAPRIEM" class="inline-block underline px-1">{{ selected.DATAPRIEM.replace(/..\B/g, '$&.') }} г.</span>
                    </td>
                    <td class="border-table px-1 py-0 text-center">38</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="2" class="border-table px-1 h-[28px] leading-none">
                        <span>Вид приема: </span>
                        <span class="underline contents font-bold">{{ selected.VIDPRIEM }}</span>
                    </td>
                    <td class="border-table px-1 py-0 text-center">39</td>
                    <td class="border-table px-1 py-0"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 pt-2 ">
                        <div class="flex justify-between">
                            <span>
                                Подпись оформляемого
                            </span>
                            <span>
                                Дата: "<span class="inline-block w-8 border-b border-gray-600"></span>"
                                <span class="inline-block w-28 border-b border-gray-600"></span> г.
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-3">

                    </td>
                </tr>
            </table>
        </main>


        <main class="w-1/2 pl-2">
            <table class="w-full">
                <tr class="leading-1">
                    <td colspan="6" class="border-table px-1 py-0.5">Наименование предприятия (организации)
                    </td>
                </tr>
                <tr class="leading-4">
                    <td rowspan="8" colspan="2" class="border-table w-32"></td>
                    <td rowspan="2" colspan="2" class="border-table text-center text-base font-bold ">ЛИЧНАЯ
                        КАРТОЧКА</td>
                    <td colspan="2" class="border-table text-center w-[129px]">
                        Код документа
                    </td>
                </tr>
                <tr class="leading-1">
                    <td colspan="2" class="border-table text-center">0801701</td>
                </tr>
                <tr class="leading-none">
                    <td colspan="2" class="border-table px-1 py-0.5">
                        <span class="opacity-0"> a</span><br>
                        Табельный номер
                        <span class="font-bold">{{ selected.TABN }} </span>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">1</td>
                    <td colspan="1" class="border-table px-1 py-0.5 text-center"></td>
                </tr>

                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-1 relative">
                        Фамилия
                        <div
                            class="absolute top-0 left-28 bg-white w-9 h-20 flex justify-center items-center border-x border-gray-600">
                            2
                        </div>
                        <span v-if="selected.FIO" class="inline-block ml-24 pl-2 font-bold">
                            {{ selected.FIO.split(' ')[0] }}
                        </span>
                    </td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-1">
                        Имя
                        <span v-if="selected.FIO" class="inline-block ml-32 pl-0 font-bold">
                            {{ selected.FIO.split(' ')[1] }}
                        </span>
                    </td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-1">
                        Отчество
                        <span v-if="selected.FIO" class="inline-block ml-24 pl-2 font-bold">
                            {{ selected.FIO.split(' ')[2] }}
                        </span>
                    </td>
                </tr>
                <tr class="leading-none">
                    <td colspan="2" class="border-table px-1 py-0.5">
                        <span class="opacity-0"> a</span><br>
                        Пенсионность
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">3</td>
                    <td colspan="1" class="border-table px-1 py-0.5"></td>
                </tr>
                <tr class="leading-none">
                    <td colspan="2" class="border-table px-1 py-0.5 h-[39px]">
                        <span class="mr-5 mb-[10px] inline-block">Пол</span>
                        <span v-if="selected.SEX == 'М'" class="font-bold">Мужской</span>
                        <span v-else class="font-bold">Женской</span>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">4</td>
                    <td colspan="1" class="border-table px-1 py-0.5 text-center"></td>
                </tr>
                <tr class="leading-none">
                    <td colspan="4" class="border-table px-1 py-0.5 h-7">
                        Дата рождения
                        <span class="ml-2 font-bold">
                            {{ selected.DATAR }}
                        </span>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">5</td>
                    <td colspan="1" class="border-table px-1 py-0.5 text-center"></td>
                </tr>
                <tr class="leading-none">
                    <td colspan="4" class="border-table px-1 py-0.5 h-[32px]">
                        <div class="flex mt-[1px] items-start">
                            <span>
                                Место рождения
                            </span>
                            <span class="inline-block underline px-1 w-80 break-words font-bold">{{ selected.MESTOR }}</span>
                        </div>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">6</td>
                    <td colspan="1" class="border-table px-1 py-0.5"></td>
                </tr>
                <tr class="leading-none">
                    <td colspan="4" class="border-table px-1 py-1.5">
                        Национальность
                        <span class="ml-1 font-bold">
                            {{ selected.NATION }}
                        </span>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">7</td>
                    <td colspan="1" class="border-table px-1 py-0.5 text-center"></td>
                </tr>
                <tr class="leading-none">
                    <td colspan="4" class="border-table px-1">
                        <span>
                            <span class="inline-block w-32 border-b border-gray-600 ml-20 pt-3"></span> <br>
                            <span class="inline-block w-32 border-b border-gray-600 pt-3"></span>
                        </span>
                    </td>
                    <td colspan="1" class="border-table px-1 py-0.5 w-9 text-center">8</td>
                    <td colspan="1" class="border-table px-1 py-0.5"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border-table px-1 py-2">
                        Член профсоюза
                        <span class="px-14">да </span>
                        <span>нет</span>
                    </td>
                    <td colspan="1" class="border-table px-1 w-9 text-center">9</td>
                    <td colspan="1" class="border-table px-1"></td>
                </tr>
            </table>
            <table class="w-full">
                <tr class="leading-1">
                    <td rowspan="5" colspan="1" class="border border-t-0 border-gray-600 p-0 w-8">
                        <div class="flex items-center justify-center text-center w-8">
                            <span class="-rotate-90 inline-block text-xs leading-none whitespace-nowrap">
                                Сведения об оброзование
                            </span>
                        </div>
                    </td>
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 py-1">
                        <span>Оброзование</span>
                        <span class="ml-1 font-bold">
                            {{ selected.VIDOBRAZ }}
                        </span>
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">10</td>
                    <td colspan="1" class="border border-t-0 leading-none border-gray-600 px-1 py-0 w-[95px] break-all text-center capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="leading-none border-table px-1 py-0 h-[37px]">
                        <span>
                            Наименование учебного заведения:  
                        </span>
                        <div class="contents font-bold">
                            <span class="underline">{{ selected.UCHZAV }}</span>
                        </div>
                    </td>
                    <td colspan="1" rowspan="2" class="border-table px-1 w-9 text-center">11</td>
                    <td colspan="1" class="border-table px-1"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="border-table px-1 py-0">
                        <div class="leading-none">
                            <span class="inline-block px-4 border-b border-gray-600">Диплом</span>
                            <span class="px-8">№</span>
                            <span class="pl-20">от</span>
                            "<span class="inline-block w-8"></span>"
                            <span class="pl-20">г.</span>
                        </div>
                        <div class="pt-[3px]">удостоверение</div>
                    </td>
                    <td colspan="1" class="border-table px-1"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 py-1">
                        Форма обучения <span class="font-bold">{{ selected.FORMAUCH }}</span>
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">12</td>
                    <td colspan="1" class="border border-t-0 leading-none border-gray-600 px-1 py-0 w-[95px] text-center capitalize"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 h-[27px] leading-none">
                        <span>Специальность по оброзованию: </span> 
                        <div class="contents font-bold underline">{{ selected.SPECOBR }}</div>
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">13</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td rowspan="3" colspan="1" class="border border-t-0 border-gray-600 p-0 w-8">
                        <div class="flex items-center justify-center text-left w-8">
                            <span class="-rotate-90 inline-block text-xs leading-none whitespace-nowrap">
                                Учеба в <br> настоящее время
                            </span>
                        </div>
                    </td>
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 leading-none pt-1">
                        <div>Наименование учебного заведения курс (класс) <span
                                class="w-32 inline-block border-b border-gray-600 pt-3"></span></div>
                        <div class="pt-0.5"><span class="w-32 inline-block border-b border-gray-600 pt-4"></span></div>
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">14</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 py-[13px] leading-none">
                        Изучаемая специальность <span class="w-60 inline-block border-b border-gray-600"></span>
                    </td>
                    <td colspan="1" rowspan="2" class="border border-t-0 border-gray-600 px-1 w-9 text-center">15</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="3" class="border border-t-0 border-gray-600 px-1 py-1 opacity-0">
                        StReLoK
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border border-t-0 border-gray-600 px-1 py-1">
                        Работа по специальности
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">16</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border border-t-0 border-gray-600 px-1 py-[5px]">
                        Ученная степен , звание
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">17</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
                <tr class="leading-1">
                    <td colspan="4" class="border border-t-0 border-gray-600 px-1 pb-[4px] pt-[5px]">
                        Специальность по научной работе
                    </td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 w-9 text-center">18</td>
                    <td colspan="1" class="border border-t-0 border-gray-600 px-1 py-0 w-[95px]"></td>
                </tr>
            </table>
        </main>
    </section>
</template>

<script setup lang="ts">

const { selected } = defineProps(['selected'])


if(selected.F029 == 2){
    selected.UCHAST_CHS = 'Боевые действия Афганистан'
}
</script>
