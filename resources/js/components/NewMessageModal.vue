<template>
    <modal
        name="new-message"
        classes="p-10 bg-card rounded-lg"
        height="auto"
        :scrollable="true"
        @before-open="beforeOpen"
    >
        <form @submit.prevent="submit">
            <h1 class="font-normal text-2xl text-default mb-16 text-center">Wiadomość</h1>

            <div class="flex">
                <div class="flex-1 mr-4">
                    <div class="mb-4">
                        <label for="subject" class="text-sm block mb-2">Temat</label>

                        <input
                            id="subject"
                            type="text"
                            class="border p-2 text-xs block w-full rounded"
                            :class="form.errors.subject ? 'border-red-600' : 'border'"
                            v-model="form.subject"
                        >

                        <span class="text-xs italic text-error" v-if="form.errors.subject"
                              v-text="form.errors.subject[0]"></span>
                    </div>

                    <div class="mb-4">
                        <label
                            for="body"
                            class="text-sm block mb-2"
                        >body</label>

                        <textarea
                            id="body"
                            class="border p-2 text-xs block w-full rounded"
                            :class="form.errors.body ? 'border-red-600' : 'border'"
                            rows="7"
                            v-model="form.body"
                        ></textarea>

                        <span class="text-xs italic text-error" v-if="form.errors.body"
                              v-text="form.errors.body[0]"></span>
                    </div>
                </div>
            </div>

            <footer class="flex justify-end">
                <button type="button" class="button is-outlined mr-4 focus:outline-none"
                        @click.prevent="form.reset(), $modal.hide('new-message')">Anuluj
                </button>
                <button type="submit" class="button focus:outline-none">Wyślij</button>
            </footer>
        </form>
    </modal>
</template>

<script>
    import Form from './Form'

    export default {
        data() {
            return {
                form: new Form({
                    subject: '',
                    body: ''
                })
            }
        },
        methods: {
            async submit() {
                this.form.post(this.endpoint)
                    .then(response => location = response.data.message);
            },
            beforeOpen(event) {
                this.endpoint = event.params.endpoint
            }
        }
    }
</script>
