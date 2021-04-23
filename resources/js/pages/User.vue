<template>
    <div>
        <section v-if="id">
            <h1>Hello {{ detailUser.name }}.</h1>
            <router-link :to="{ name: 'User' }">back</router-link>
        </section>
        <section v-else>
            <h1>Daftar User</h1>
            <router-link to="/user/create">Register</router-link>
            <ul>
                <li v-for="user in users">
                    <!-- <router-link :to="profile_uri(user.name)">{{ user.name }}</router-link> -->
                    <a href="" @click="lihatUser(user.id)">{{ user.name }}</a>
                </li>
            </ul>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            users: [],
            detailUser: {}
        };
    },
    mounted() {
        this.getUser();

        // fetch('api/users')
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data)
        //     this.users = data
        // })
    },
    methods: {
        getUser() {
            axios.get("/api/users").then((response) => {
                console.log(response);
                this.users = response.data;
            });
        },
        profile_uri(name) {
            return "/user/" + name.toLowerCase();
        },
        lihatUser(id) {
            // this.$router.push('/user/' + name.toLowerCase())
            this.$router.push({
                name: 'Profile',
                params: { id }
            });
        }
    }
};
</script>
