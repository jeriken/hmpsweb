<template>
  <div class="px-4 sm:px-6 py-12">
    <ExampleComponent />
  </div>
</template>

<script>
import ExampleComponent from "../components/ExampleComponent.vue"

export default {
  components : {
    ExampleComponent
  },
  mounted() {
    console.log('Component mounted.')
  },
}
</script>
