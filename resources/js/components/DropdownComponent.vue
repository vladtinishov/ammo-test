<template>
    <div class="main" :style="widthStyle">
        <div class="dropdown__header" @click="openList">
            <span>
                {{ current.label }}
            </span>
            <span :class="{open: isOpen}">
                <img src="images/arrow.svg" width="15px" alt="">
            </span>
        </div>
        <ul class="dropdown__list" :class="{ active: isOpen }" :style="widthStyle">
            <li class="list__li"
                v-for="item in items"
                :key="item.id"
                @click="select(item)"
            >
                {{ item.label }}
            </li>
        </ul>
    </div>
</template>

<script>
export default ({
    props: ["items", "width"],
    data() {
        return {
            current: this.items[0],
            isOpen: false,
            arrow: require('../../assets/img/arrow.png'),

            widthStyle: {
                width: this.width + "%",
            }
        };
    },
    methods: {
        openList() {
            this.isOpen = !this.isOpen;
        },
        select(item) {
            this.$emit("input", item);
            this.isOpen = false;
            this.current = item;
        }
    }
})
</script>

<style scoped>
.dropdown__header {
    border: 1px solid gray;
    border-bottom: 2px solid gray;
    border-radius: 3px;
    padding: 5px;
    box-sizing: border-box;
    width: 100%;
    background: #FBFBFB;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.open {
    transform: rotate(180deg);
}
.dropdown__list {
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    width: 100%;
    background: white;
    visibility: hidden;
}
.list__li {
    padding: 5px;
}
.list__li:hover {
    background: #EDEDED;
}
.active {
    visibility: inherit;
}

@media (max-width: 400px) {
    .widthStyle {
        width: 100%;
    }
}
</style>