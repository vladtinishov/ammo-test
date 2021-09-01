<template>
    <div class="main">
        <div class="header">
            <dropdown
                :items="items"
                v-model="selectedValue"
                width="30"
            />
            <cust-button
                class="header__button"
                value="Создать"
                :isActive="isActive"
                :type="selectedValue.value"
            />
        </div>
        <result :columns="columns"/>
        <cust-footer/>
    </div>
</template>

<script>
import {mapState} from 'vuex'
import DropdownComponent from './DropdownComponent.vue'
import ButtonComponent from './ButtonComponent.vue'
import FooterComponent from './FooterComponent.vue'
import ResultAreaComponent from './ResultAreaComponent.vue'

export default ({
    data() {
        return {
            items: [
                {
                    id: 0,
                    label: "Не выбрано",
                },
                {
                    id: 1,
                    label: "Сделка",
                    value: "lead",
                },
                {
                    id: 2,
                    label: "Контакт",
                    value: "contact",
                },
                {
                    id: 3,
                    label: "Компания",
                    value: "company",
                },
            ],
            selectedValue: {id: 0},
        };
    },
    components: {
        dropdown: DropdownComponent,
        "cust-button": ButtonComponent,
        "cust-footer": FooterComponent,
        result: ResultAreaComponent,
    },
    computed: {
        isActive() {
            if (this.selectedValue.id === 0) {
                return false;
            }
            return true;
        },
        ...mapState({
            columns: state => state.columns,
        })
    },
    methods: {
        gotValue(value) {
            if (this.columns.values[0].id === "-") {
                this.columns.values = [];
                this.columns.values.push(value);
            }
            else {
                this.columns.values.push(value);
            }
        }
    }
})
</script>

<style scoped>
.header {
    display: flex;
    align-items: center;
    padding: 5px;
    background: white;
    box-shadow: 1px 1px 5px 1px gray;
}
.header__button {
    margin: 0 10px;
}
</style>