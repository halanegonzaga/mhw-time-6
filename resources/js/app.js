/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


new Vue({
    el: '#app',
    data: {
        questions: false,
        filter: true,
        step: 0,
        session: {
            cpf: null,
            is_mother: false,
            is_entrepreneur: false,
            people: {},
            cnpj:null,
            business: {},
            cep: null,
            location: {},
            filters: {
                area: 1,
                suporte: [],
                hours: 1,
                study: []
            }
        }
    },
    methods: {
        openQuestions: function () {
            this.questions = true;
        },
        closeQuestions: function () {
            this.questions = false;
        },
        closeResult: function(){
            this.filter = false;
        },
        askStep: function(){
            
        },
        nextStep: function(){
            this.step++;
        },
        finishStep: function(){
            this.filter = true;
            this.questions = false; 
        }
    }
});

document.body.style.display = 'block';