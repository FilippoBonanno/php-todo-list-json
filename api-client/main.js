const { createApp } = Vue

createApp({
  data() {
    return {
        students: []
    }
  },
  methods: {

  },
  mounted() {
    console.log("Recupero i dati dal server");

    axios.get("../list.php").then(results => {
        console.log("Risultati: ", results);
        this.students = results.data;
    });
  }
}).mount('#app')