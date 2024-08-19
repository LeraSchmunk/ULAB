<template>
    <div id="modalPossibilities">
        <div class="overlay">
            <div class="modal">
                <div class="modal__header">
                    <h3 class="maintitle">
                        Скачать полный список возможностей ULAB
                    </h3>
                    <div class="close-btn" @click="closePossibilities">
                        &#10005;
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal-subtitle mainsubtitle">
                        Оставьте свои контактные данные, мы отправим на
                        указанный E-mail список всех возможностей ULAB
                    </div>
                    <form
                        class="demoModalPossibilities"
                        @submit.prevent="possibilities"
                    >
                        <input
                            class="inputDemo"
                            id="name"
                            type="text"
                            placeholder="  * Ваше имя"
                            v-model.trim="name"
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
                            id="number"
                            type="tel"
                            placeholder="  * +7 999 999 99 99"
                            v-model.trim="number"
                        />
                        <input
                            type="email"
                            placeholder="   * example@example.ru"
                            id="email"
                            v-model.trim="email"
                        />
                        <button
                            type="submit"
                            id="btn"
                            @click="sendPossibilities"
                            class="send-btn btns"
                        >
                            Получить список возможностей
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
    name: "ModalPossibilities",
    data() {
        return {
            v$: useVuelidate(),
            name: "",
            company: "",
            number: "",
            email: "",
        };
    },
    validations() {
        return {
            name: { required },
            company: { required },
            number: { required, numeric },
            email: { required, email },
        };
    },
    methods: {
        closePossibilities() {
            this.$emit("closePossibilities");
        },
        sendPossibilities() {
            this.$emit("sendPossibilities");
        },
        sendPossibilities() {
            let dataResponse = {
                name: this.name,
                company: this.company,
                email: this.email,
                number: this.number,
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
            this.$emit("closePossibilities");
        },

        possibilities() {
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
    top: 50%;
    display: block;
    transform: translate(-50%, -50%);
}

.maintitle {
    font-size: 30px;
    width: 500px;
}
input {
    color: black;
}
.demoModalPossibilities {
    display: flex;
    flex-direction: column;
}
@media (max-width: 950px) {
    .modal {
        top: 60%;
    }
}
@media (max-width: 630px) {
    .modal {
        width: 300px;
        background-size: 170%;
    }
}
</style>
