import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        columns: {
            names: ["ID", "Название"],
            values: [
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
                {id: "-", text: "-",},
            ],
        },
    },
    actions: {
        getColumn(ctx, type) {
            axios.get("/create-" + type)
                .then(data => {
                    console.log(data.data);
                    // this.$emit("gotValue", data.data);
                    ctx.commit("updateColumns", data.data)
                });
        }
    },
    mutations: {
        updateColumns(state, column) {
            if (state.columns.values[0].id === "-") {
                state.columns.values = [];
            }
            state.columns.values.push(column);
        }
    },
    getters: {

    }
})