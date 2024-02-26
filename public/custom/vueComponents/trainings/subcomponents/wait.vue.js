const wait = {
    template: `
<div>
    <button class="btn btn-success" @click="startWaiting" >Start Waiting</button>

    <div class="lfont"  >
        {{timer}}
    </div>

</div>
`,
    props: {
        wait: {
            required: true,
        }
    },

    data() {
        return {
            timer: 0,
        }
    },

    methods: {
        startWaiting() {
            this.timer = this.wait;

            let timerId = setInterval(() => {
                this.timer--;
            }, 1000);

            setTimeout(() => {
                clearInterval(timerId);

                let $audioSourceElem = $('#idAudio source');
                let audioUrl = '/public/custom/vk.mp3';

                $audioSourceElem.attr('src', audioUrl);
                let audioElem = document.getElementById('idAudio');
                audioElem.load();
                audioElem.play();

                this.$emit('next-step');
            },this.wait * 1000);

        }
    }
};
