<template>
    <div id="modal">
        <div class="overlay">
            <div class="modal">
                <div class="modal__header">
                    <h3 class="maintitle">Будем рады провести консультацию <br> по цифровизации Вашей лаборатории!</h3>
                    <div class="close-btn" @click="closeConnection">
                        &#10005;
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal-subtitle mainsubtitle">
                        Оставьте свои контактные данные, мы свяжемся с вами в
                        ближайшее время
                    </div>
                    <form class="demoModal" @submit.prevent="connection">
                        <input
                            class="inputDemo"
                            id="name"
                            type="text"
                            placeholder="  * Ваше имя (обязательно к заполнению)"
                            v-model.trim="name"
                        />
                        <input
                            class="inputDemo"
                            id="position"
                            type="text"
                            placeholder="  * Ваша должность"
                            v-model.trim="position"
                        />
                        <input
                            class="inputDemo"
                            id="company"
                            type="text"
                            placeholder="  * Компания"
                            v-model.trim="company"
                        />
                        <input
                            class="inputDemo"
                            id="city"
                            type="text"
                            placeholder="  * Ваш город"
                            v-model.trim="city"
                        />
                        <input
                            class="inputDemo"
                            id="number"
                            type="tel"
                            placeholder="  * +7 999 999 99 99 (обязательно к заполнению)"
                            v-model.trim="number"
                        />
                        <input
                            type="email"
                            placeholder="   * email"
                            id="email"
                            v-model.trim="email"
                        />
                        <p class="privacy_policy">Отправляя свои данные, Вы соглашаетесь <br><a @click="downloadPrivacy" href="#">с политикой конфиденциальности</a></p>
                        <button :disabled = "!changed || !chekName"
                            type="submit"
                            id="btn"
                            @click="sendContacts"
                            class="send-btn btns"
                        >
                            Отправить заявку на консультацию
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import useVuelidate from "@vuelidate/core";
import { required, email, numeric } from "@vuelidate/validators";

export default {
    name: "ModalConnection",

    data() {
        return {
            v$: useVuelidate(),
            name: "",
            company: "",
            number: "",
            email: "",
            position: "",
            city: "",
            disable: true
        };
    },

    validations() {
        return {
            name: { required },
            company: { required },
            number: { required, numeric },
            email: { required, email },
            position: { required, position },
            city: { required, city }
        };
    },

    computed: {

        changed() {
            return this.number.trim() !='';
        },

        chekName() {
            return this.name.trim() !='';
        }
    },

    methods: {
        closeConnection() {
            this.$emit("closeConnection");
        },
        sendContacts() {
            this.$emit("sendContacts");
        },

        sendContacts() {
            let dataResponse = {
                name: this.name,
                company: this.company,
                email: this.email,
                number: this.number,
                position: this.position,
                city: this.city
            };

            console.log(dataResponse);

            axios
                .post("/connection", dataResponse)
                .then((response) => {
                    console.log(response.data);
                    // this.close()

                })
                .catch((e) => {
                    console.log(e);
                });
            alert("Заявка успешно отправлена, наш менеджер свяжется с Вами");
            this.$emit("closeConnection");
        },

        downloadPrivacy() {

            axios.get("/privacy_policy", {responseType: 'blob'}).then((response) => {

                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', 'Политика конфиденциальности.pdf'); // Имя файла для скачивания
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }) 
        },

        connection() {
            this.v$.$validate();
            if (!this.v$.$error) {
            } else {
                alert("Пожалуйста, заполните все поля");
            }
        },
    },
};
</script>
<style scoped>
.modal {
    padding: 20px;
    width: 500px;
    margin: 0 auto;
    background-image: url("../../../public/img/modal-background.webp");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 150%;
    position: absolute;
    color: black;
    border: 3px solid white;
    text-align: left;
    left: 50%;
    top: 60%;
    display: block;
    transform: translate(-50%, -50%);
}

.maintitle {
    font-size: 20px;
    width: 500px;
}

.demoModal {
    display: flex;
    flex-direction: column;
}

input {
    color: black;
}

.privacy_policy {
    padding: 5px;
    text-align: center;
    font-size: 16px;
}

.send-btn:disabled {
  opacity: 0.5;
}

@media (max-width: 950px) {
    .modal {
        top: 80%;
    }
}

@media (max-width: 630px) {
    .modal {
        width: 300px;
        background-size: 170%;
    }
}
</style>
