<template>
    <h1>La liste des Utilisateurs</h1>
    <div class="card">
        <DataTable :value="users" paginator :rows="5" :rowsPerPageOptions="[5, 10, 20, 50]"  tableStyle="min-width: 50rem" >
            <Column field="id" header="Id"></Column>
            <Column field="name" header="Name"></Column>
            <Column field="email" header="Email"></Column>
            <Column header="Action">
                <template #body="{id}">
                    
                    <router-link :to="`/users/${id}`" >
                        <Button icon="pi pi-eye" rounded aria-label="Filter" />
                    </router-link>
                    
                        <router-link :to="`/users/${id}/edit`" icon="pi pi-check" rounded  class="p-2 col border btn btn-success">Edit</router-link>
                        <button @click="deleteuser(id)" type="button" class="p-2 col border btn btn-danger">Delete</button>
                </template>
            </Column>
        </DataTable>
    </div>
     
</template>

<script>
    import axios from 'axios';
  

    export default {
        data() {
            return {
            users: []
            }
        },
        async created() {
            try {
            const response = await axios.get('/api/users');
            this.users = response.data;
            } catch (error) {
            console.error(error);
            }
        },
        methods: {
            async deleteuser(id) {
            try {
                await axios.delete(`/api/users/${id}`);
                this.users = this.users.filter(user => user.id !== id);
            } catch (error) {
                console.error(error);
            }
            }
        }
    }
</script>