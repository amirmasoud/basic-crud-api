<template>
    <div>
        <b-button id="show-btn" @click="$bvModal.show(`edit-sample-form-${sample}`)">Edit sample</b-button>

        <b-modal :id="`edit-sample-form-${sample}`" hide-footer @shown="loadEditFormContent">
            <template #modal-title>
                Edit sample
            </template>
            <div v-if="loading">Loading...</div>
            <b-form @submit="onSubmit" v-else>
                <b-form-group id="name" label="Name:" label-for="name">
                    <b-form-input
                        id="name"
                        v-model="form.name"
                        placeholder="Name"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group id="description" label="Description:" label-for="description">
                    <b-form-textarea
                        id="description"
                        v-model="form.description"
                        placeholder="Description"
                        required
                    ></b-form-textarea>
                </b-form-group>

                <b-form-group id="code" label="Code:" label-for="code">
                    <b-form-textarea
                        id="code"
                        v-model="form.code"
                        placeholder="Code"
                        required
                    ></b-form-textarea>
                </b-form-group>

                <b-form-group id="status" label="Status:" label-for="status">
                    <b-form-select
                        id="status"
                        v-model="form.status"
                        :options="statuses"
                        required
                    ></b-form-select>
                </b-form-group>

                <div class="mt-5">
                    <b-button type="submit" variant="primary">Submit</b-button>
                </div>
            </b-form>
        </b-modal>
    </div>
</template>

<script>
export default {
    name: "BasicSampleEdit",
    props: ['sample', 'lazy'],
    data() {
        return {
            form: {
                name: '',
                description: '',
                code: '',
                status: 1,
            },
            statuses: [{ text: 'Active', value: 'active' }, { text: 'Inactive', value: 'inactive' }],
            loading: true
        }
    },
    methods: {
        onSubmit(event) {
            event.preventDefault()
            axios.put(`/api/sample/${this.sample}`, this.form)
                .then(response => {
                    this.$emit('updated', response.data.data)
                    this.$bvModal.hide(`edit-sample-form-${this.sample}`)
                })
                .catch(error => {
                })
        },
        loadEditFormContent() {
            axios.get(`/api/sample/${this.sample}`)
                .then(response => {
                    this.form = response.data.data
                    this.loading = false
                })
        },
    }
}
</script>
