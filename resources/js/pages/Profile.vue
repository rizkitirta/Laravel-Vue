<template>
    <div>
        <section v-if="id">
            <img v-if="detailUser.photo" :src="'/images/' + detailUser.photo" width="100">
            <h1>Hello {{ detailUser.name }}.</h1>
            <p>Email : {{ detailUser.email }}</p>
            <a href="" @click.prevent="handlingDelete">Delete</a>
            <a href="" @click.prevent="handlingEdit">Edit</a>
            <!-- <router-link :to="{ name: 'Edit' }">Edit</router-link> -->
            <router-link :to="{ name: 'Upload', params: {id: detailUser.id} }">upload</router-link>
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
        },
        handlingEdit() {
            this.$router.push({
                name: 'Edit',
                params: {id : this.id}
            })
        }
    }
};
</script>
