<script setup>
	import AppLayout from '@/Layouts/AppLayout.vue';
    import JetBanner from '@/Jetstream/Banner.vue';
    import JetCheckbox from '@/Jetstream/Checkbox.vue';
    import UsersTable from '@/Pages/Users/Index/Table.vue';
</script>

<template>
    <AppLayout title="Users">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <UsersTable :users="users"></UsersTable>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
	export default {
		props: [
			'users',
		],
        data() {
            return {
            }
        }
	}
</script>