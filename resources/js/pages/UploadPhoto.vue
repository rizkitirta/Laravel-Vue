<template>
  <div>
      <h3>Upload Photo</h3>
      <img :src="previewImage" width="80">
      <div class="form-group">
          <input type="file" name="photo" @change="upload">
      </div>
      <button type="submit">Upload</button>
  </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            previewImage: null
        }
    },
    methods: {
        upload(e) {
           let files =  e.target.files[0]
           this.previewImage = URL.createObjectURL(files)
        }
    }
}
</script>

<style>

</style>
