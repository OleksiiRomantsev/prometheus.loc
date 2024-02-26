const audioPlayer = {
    template: `
<div class="d-inline-block myaudio" @click="play" :style="{color: activeColor}" :title="title" >
    <span class="material-icons">
    {{icon}}
    </span>
</div>
`,

    data() {
        return {
            activeColor: 'inherit',
            playColor: '#64dd17',
            normalColor: 'inherit',
            icon: 'play_circle_outline'
        }
    },

    props: {
        title: {
            type: String,
            required: false,
            defauld: '',
        },
        audio_url: {
            type: String,
            required: true,
        }
    },

    methods: {
        play() {

            this.changeColor();

            let $audioSourceElem = $('#idAudio source');
            let audioUrl;
            if(this.audio_url.startsWith('/files')) audioUrl = '/public'+ this.audio_url;
            else audioUrl = this.audio_url;

            $audioSourceElem.attr('src', audioUrl);

            let audioElem = document.getElementById('idAudio');
            audioElem.load();
            audioElem.play();
        },

        changeColor() {
            this.activeColor = this.playColor;
            setTimeout(()=> {
                this.activeColor = this.normalColor;
            }, 2000);
        }
    },

};


