<template>
  <h3>Add a new task</h3>
  <label for="title">Title *</label>
  <input
    v-model="newTask.name"
    type="text"
    name="title"
    placeholder="Enter a title..."
  /><br />

  <label for="description">Description *</label>
  <textarea
    v-model="newTask.description"
    name="description"
    rows="4"
    placeholder="Enter a description..."
  /><br />
  <button class="btn gray" @click="store.addTask(newTask)">Add Task</button>
</template>

<script setup>
import { useTasksStore } from "@/stores/tasksStore.js";
const store = useTasksStore();

let newTask = { completed: false };
</script>

<style>
</style>