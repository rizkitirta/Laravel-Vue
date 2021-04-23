<template>
    <div>
        <section v-if="id">
            <h1>Hello {{ detailUser.name }}.</h1>
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
            axios.get('/api/users/' + this.id).then((response) => {
                console.log(response);
                this.detailUser = response.data;
            });
        }
    }
};
</script>
