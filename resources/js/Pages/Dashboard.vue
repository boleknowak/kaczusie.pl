<template>
  <!-- <Head title="Dashboard"></Head> -->
  <Head>
    <title>Dashboard</title>
  </Head>

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
          <div>You're logged in!</div>
          <div v-if="test">{{ test }}</div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },
  props: {
    test: {
      type: String,
      default: 'test',
    },
  },
}
</script>