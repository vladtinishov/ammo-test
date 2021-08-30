<template>
    <div class="main">
        <button class="button" :class="{ 'button-active': isActive }" @click="create">
            {{ value }}
        </button>
    </div>
</template>

<script>
import axios from "axios"

export default ({
    props: ["value", "isActive", "type"],
    data() {
        return {
        }
    },
    methods: {
        create() {
            if (!this.isActive) return;
            axios.get("/create-" + this.type)
                .then(data => {
                    console.log(data.data);
                    this.$emit("gotValue", data.data);
                });
        }
    }
})
</script>

<style scoped>
.button {
    border: 1px #DBDEDF solid;
    background: #FCFCFC;
    border-radius: 1px;

    padding: 5px 10px;

    font-weight: bold;
    color: black;
}
.button-active {
    background: #5385F8;
    border: 1px #4672D7 solid;
    
    color: white;
}
</style>