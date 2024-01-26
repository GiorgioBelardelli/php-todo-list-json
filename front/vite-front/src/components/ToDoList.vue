<script>
import axios from "axios";

export default {
  name: "ToDoList",

  data() {
    return {
      todoList: [],
      newTaskText: "",
    };
  },
  methods: {
    pushTask() {
      const params = {
        text: this.newTaskText,
      };
      const config = {
        headers: {
          "Content-Type": "multipart/form-data",
        },
      };

      axios
        .post(
          "http://localhost:80/php-todo-list-json/back/pushTask.php",
          params,
          config
        )
        .then((res) => {
          this.todoList = res.data;
          this.newTaskText = "";
        })
        .catch((err) => console.log(err));
    },
  },
  mounted() {
    axios
      .get("http://localhost:80/php-todo-list-json/back/index.php")
      .then((res) => {
        this.todoList = res.data;
      })
      .catch((err) => console.log(err));
  },
};
</script>

<template>
  <h1>Hai {{ todoList.length }} tasks da completare:</h1>

  <form @submit.prevent="pushTask">
    <input type="text" name="text" v-model="newTaskText" />
    <input type="submit" value="Inserisci Task" />
  </form>

  <ul>
    <li v-for="(todo, index) in todoList" :key="index">
      {{ todo.name }}
    </li>
  </ul>
</template>

<style scoped></style>
