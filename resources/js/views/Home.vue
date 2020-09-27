<template>
  <div>
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
