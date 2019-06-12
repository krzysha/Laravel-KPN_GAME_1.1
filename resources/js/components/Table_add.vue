<template> 
    <table id="wynik">
            <tr id="wynik">
			    <td id="wynik">Gracz</td>
 			    <td id="wynik">Komputer</td>
			    <td id="wynik">Wynik</td>
            </tr>

            <tr v-for="record in records" :key="record.id" id="wynik">
                <td id="wynik">{{ record.player }}</td>
                <td id="wynik">{{ record.computer }}</td>
                <td id="wynik">{{ record.result }}</td>
            </tr> 
</table>
</template>

<script>

export default {
   props: ['records'],
   created() {
            console.log(this.records);
        }
}
</script>

<style scoped>
  .background-dark {
    background-color: #000;
  }
  .background-light {
    background-color: #fff;
  }
</style>


