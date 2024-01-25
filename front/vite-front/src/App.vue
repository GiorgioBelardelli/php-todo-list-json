<script>
import axios from "axios";

export default {
  data() {
    return {
      todoList: [],
    };
  },
  mounted() {
    axios.get("http://localhost:80/php-todo-list-json/back/").then((res) => {
      console.log(res.data);
      this.todoList = res.data;
    });
  },
};
</script>

<template>
  <h1>To Do List:</h1>
  <ul>
    <li v-for="todo in todoList" :key="todo">
      {{ todo.name }}
    </li>
  </ul>
</template>

<style scoped></style>
