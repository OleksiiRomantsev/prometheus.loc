
// пример создания вложенного компонента
const subapp = {
    template: `<h1>{{ title }}</h1>`,
    data() {
        return {
        }
    },

    props: {title: String},
};

const slotsExample = {
    template: `<h1>
<slot name="header" ></slot>
<slot>No text</slot>
</h1>`,
};


const myapp = {
    components: {
        'sub-app': subapp,
        'slot-ex': slotsExample
    }
};

Vue.createApp(myapp).mount('#myapp');

//


