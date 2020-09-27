<template>
  <div class="min-h-screen">
    <link rel="stylesheet" href="../css/main.css" />
    <Layout>
      <ExampleComponent />
    </Layout>
  </div>
</template>

<script>
import ExampleComponent from './components/ExampleComponent'
import Layout from './components/Layout'

export default {
  components: {
    ExampleComponent,
    Layout,
  },
}
</script>
