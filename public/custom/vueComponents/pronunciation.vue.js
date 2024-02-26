const PronunciationVue = {
    components: {
        'audio-player': audioPlayer,
    }
};

Vue.createApp(PronunciationVue).mount('#pronunciation');
