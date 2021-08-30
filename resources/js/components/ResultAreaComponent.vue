<template>
    <div class="main">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" v-for="names in columns.names" :key="names">{{ names }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="values in columns.values" :key="values.id">
                    <th scope="row">{{ values.id}}</th>
                    <td>{{ values.text }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default ({
    props: ["columns"],
})
</script>


<style scoped>
.main {
    width: 100%;
    margin: 20px 0;
    padding: 20px;
}
.table__column {
    padding: 0 20px;
}
</style>