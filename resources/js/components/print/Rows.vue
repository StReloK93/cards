<template>
    <tr>
        <td class="border-table py-1">40</td>
        <td class="border-table"><span v-if="numb == 1">{{ selected.DATAPRIEM }}</span></td>
        <td class="border-table leading-[0.9] text-[9px]"><span v-if="numb == 1">{{ selected.PODRAZD }}</span></td>
        <td class="border-table">41</td>
        <td class="border-table"></td>
        <td class="border-table"><span v-if="numb == 1">{{ selected.PROF }}</span></td>
        <td class="border-table">42</td>
        <td class="border-table"></td>
        <td class="border-table"><span v-if="numb == 1">{{ selected.RAZRYAD }}</span></td>
        <td class="border-table"></td>
        <td class="border-table">45</td>
        <td class="border-table"></td>
        <td class="border-table">46</td>
        <td class="border-table"></td>
        <td class="border-table"></td>
        <td class="border-table"></td>
    </tr>
</template>

<script lang="ts" setup>
const { numb , selected } = defineProps(['numb', 'selected'])
</script>