<template>
    <div>
        <section v-if="id">
            <h1>Hello {{ detailUser.name }}.</h1>
            <p>Email : {{ detailUser.email }}</p>
            <a href="" @click.prevent="handlingDelete">Delete</a>
            <router-link :to="{ name: 'Edit' }">Edit</router-link>
            <router-link :to="{ name: 'User' }">back</router-link>
        </section>
    </div>
</template>
<script>
export default {
    props: ["id"],
    data() {
        return {
            detailUser: {}
        };
    },
    mounted() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get("/api/users/" + this.id).then(response => {
                console.log(response);
                this.detailUser = response.data;
            });
        },
        handlingDelete() {
            if (confirm("Apakah Anda Yakin")) {
                axios.delete("/api/users/" + this.id).then(response => {
                    if (response.data.status) {
                        this.$noty.success(response.data.message);
                        this.$router.push({
                            name: "User"
                        });
                    }
                });
            } else {
                return false;
            }
        }
    }
};
</script>
