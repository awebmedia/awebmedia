document.addEventListener("DOMContentLoaded", function() {
            let el = 0;
            let FORM_SUBMIT = document.getElementById('send_form');

            (function() {
                document.getElementById("menu_show").onclick = function() {
                    document.children[0].classList.add("menu-show");
                }
                document.getElementById("menu_cross").onclick = function() {
                    document.children[0].classList.remove("menu-show");
                    location.hash = '';
                }
                let lh = location.hash;
                if (lh === "#menu") {
                    document.children[0].classList.add("menu-show");
                }
            }());
            /*----------------------------------------------------*/
            let formSS = (function() {

                let NS = "step-window",
                    NS0 = "calc",
                    NS1 = "calc-c",
                    FROM = "calculation";
                let formSS = {
                    ns: {
                        NS: NS,
                        NS0: NS0,
                        NS1: NS1,
                        FROM: FROM
                    },
                    f1: {
                        a: function(_this) {
                            let el = _this.querySelectorAll(".option__line_radio");
                            let p = _this;
                            let fn = this.root.fn;
                            for (let i = 0; i < el.length; i++) {
                                el[i].onclick = function() {
                                    let s = p.querySelector(".option__line_selected");
                                    let w = _this.closest("." + NS);
                                    if (w.classList.contains(NS + "_warn")) fn.cErrFormWindow.bind(w)();
                                    if (s !== undefined && s !== null) s.classList.remove("option__line_selected");
                                    this.classList.add("option__line_selected");
                                };
                            }
                        },
                        b: function(_this) {
                            let ol = _this.querySelector(".option__line_selected");
                            if (ol === undefined || ol === null) this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста выберите ответ на вопрос!")();
                            else this.root.fn.nFormWindow.bind(_this)();
                        },
                    },
                    f2: {
                        a: function(_this) {
                            let el = _this.querySelectorAll(".option__line_flag");
                            let p = _this;
                            let fn = this.root.fn;
                            for (let i = 0; i < el.length; i++) {
                                el[i].onclick = function() {
                                    let sw = this.closest("." + NS);
                                    if (sw.classList.contains(NS + "_warn") && sw.dataset.x == 'pp') fn.cErrFormWindow.bind(sw)();
                                    this.classList.toggle("option__line_selected");
                                };
                            }
                        },
                        b: function(_this) {
                            this.root.fn.nFormWindow.bind(_this)();
                        },
                    },
                    f3: {
                        a: function(_this) {
                            let fn = this.root.fn;
                            let el = _this.querySelectorAll(".option__line_input input");
                            for (let i = 0; i < el.length; i++) {
                                if (/^\s+$/.test(el[i].value)) el[i].value = "";
                                if (!/^$/i.test(el[i].value)) el[i].value = "";
                                el[i].onmouseover = function() {
                                    this.closest('.option__line').classList.add('option__line_s_hover');
                                }
                                el[i].onmouseout = function() {
                                    this.closest('.option__line').classList.remove('option__line_s_hover');
                                }
                                el[i].onfocus = function() {
                                    this.closest('.option__line').classList.add('option__line_s_focus');
                                }
                                el[i].onblur = function() {
                                    this.closest('.option__line').classList.remove('option__line_s_focus');
                                    if (this.name == "name")
                                        fn.controlName.bind(this, event.type)();
                                    if (this.name == "email")
                                        fn.controlEmail.bind(this, event.type)();
                                }
                                el[i].onkeydown = function() {
                                    if (event.which == 13) {
                                        this.blur();
                                        return true;
                                    }
                                    if (event.key.length > 1 || event.ctrlKey || event.altKey) return true;
                                    if (this.name == "phone")
                                        fn.controlPhone.bind(this, event.type)();
                                    if (this.name == "name")
                                        fn.controlName.bind(this, event.type)();
                                    return true;
                                }
                                el[i].oninput = function() {
                                    let sw = this.closest("." + NS);

                                    if (sw.classList.contains(NS + "_warn") && sw.dataset.x == 'inpt') fn.cErrFormWindow.bind(sw)();
                                    if (!/^$/i.test(el[i].value))
                                        this.closest('.option__line').classList.add('option__line_s_over');
                                    else
                                        this.closest('.option__line').classList.remove('option__line_s_over');
                                    if (this.name == "name")
                                        fn.controlName.bind(this, event.type)();
                                    if (this.name == "phone")
                                        fn.controlPhone.bind(this, event.type)();
                                    if (this.name == "email")
                                        fn.controlEmail.bind(this, event.type)();
                                }
                            }
                        },
                        b: function(_this) {},
                    },
                    fc: {
                        a: function(_this) {
                            let f = _this.querySelectorAll(".option__logical-part");
                            for (let i = 0; i < f.length; i++) {
                                if (f[i].dataset.f != 0)
                                    this.root[f[i].dataset.f].a(f[i]);
                            }
                        },
                        b: function(_this) {
                            if(document.getElementById("send_form").classList.contains("button_disable")) return false;
                            let lp1 = _this.querySelectorAll(".option__logical-part")[0];
                            let a = 0;
                            if (lp1.querySelector('input[name=name]').value.length == 0) a += 1;
                            if (lp1.querySelector('input[name=email]').value.length == 0) a += 3;
                            if (lp1.querySelector('input[name=phone]').value.length == 0) a += 5;
                            if (a != 3 && a != 0) {
                                if (a == 9) this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста заполните форму", "inpt")();
                                if (a == 6) this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста укажите телефон и имя", "inpt")();
                                if (a == 1 || a == 4) this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста укажите Ваше имя", "inpt")();
                                if (a == 5 || a == 8) this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста укажите Ваш телефон", "inpt")();
                                return true;
                            }
                            if (_this.querySelectorAll(".option__line_s_warn").length) {
                                this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста заполните корректно форму!", "inpt")();
                                return true;
                            }
                            if (!_this.querySelectorAll(".option__logical-part")[1].children[0].classList.contains("option__line_selected")) {
                                this.root.fn.aErrFormWindow.bind(_this, "Пожалуйста подтвердите согшласие на обработку персональных данных", "pp")();
                                return true;
                            }
                            let data = this.root.fn.getDataForm(true);
                            this.root.fn.sendDataForm(data);
                        },
                    },
                    fn: {
                        nFormWindow: function(m) {
                            this.classList.remove(NS + "_action");
                            this.nextElementSibling.classList.add(NS + "_action");
                            if (m !== true) {
                                let nid = Number(this.id.split("_")[1]);
                                let ls = document.getElementById("step-line_" + nid);
                                ls.classList.remove("step-line__step_action");
                                ls.classList.remove("step-line__step_current");
                                ls.classList.add("step-line__step_completed");
                                ls = document.getElementById("step-line_" + (nid + 1));
                                ls.classList.add("step-line__step_action");
                                ls.classList.add("step-line__step_current");
                            }
                        },
                        aErrFormWindow: function(text, g) {
                            this.querySelector("." + NS1 + "__message").innerText = text;
                            this.querySelector(".button").classList.add("button_disable");
                            this.classList.add(NS + "_warn");
                            if (g !== undefined && g !== null) {
                                this.dataset.x = g;
                            }
                        },
                        cErrFormWindow: function() {
                            this.querySelector(".button").classList.remove("button_disable");
                            this.classList.remove(NS + "_warn");
                            this.dataset.x = 0;
                        },
                        gFormWindow: function() {
                            let nid = this.id.split("_")[1];
                            this.closest(".step-line").querySelector(".step-line__step_action").classList.remove("step-line__step_action");
                            this.classList.add("step-line__step_action");
                            this.closest("." + NS0).querySelector("." + NS + "_action").classList.remove(NS + "_action");
                            document.getElementById(NS + "_" + nid).classList.add(NS + "_action");
                        },
                        getDataForm: function(x) {
                            let ex = [];
                            let u_ex = "";
                            let a = document.querySelectorAll("." + NS);
                            for (let i = 0; i < a.length - 1; i++) {
                                let o = a[i].querySelector(".option");
                                if (o.dataset.f == "f1") {
                                    let ol = o.querySelector(".option__line_selected");
                                    if (ol === null || ol === undefined) location.reload();
                                    ex.push({
                                        "q": o.dataset.q,
                                        "a": ol.dataset.a,
                                        "t": "1"
                                    });
                                    u_ex += "&0[" + i + "][q]=" + o.dataset.q + "&0[" + i + "][a]=" + ol.dataset.a + "&0[" + i + "][t]=1";
                                }
                                if (o.dataset.f == "f2") {
                                    let ol = o.querySelectorAll(".option__line_selected");
                                    let aa = {
                                        "q": o.dataset.q,
                                        "a": [],
                                        "t": "2"
                                    };
                                    let u_aa = "";
                                    for (let j = 0; j < ol.length; j++) {
                                        aa.a.push(ol[j].dataset.a);
                                        u_aa += "&0[" + i + "][a][]=" + ol[j].dataset.a;
                                    }
                                    u_ex += "&0[" + i + "][q]=" + o.dataset.q + u_aa + "&0[" + i + "][t]=2";
                                    ex.push(aa);
                                }
                            }
                            let cn = {};
                            a = a[a.length - 2].querySelectorAll("input");
                            for (let i = 0; i < a.length; i++) {alert(a[i].value);
                                cn[a[i].name] = a[i].value;
                                u_ex += "&1[" + a[i].name + "]=" + a[i].value;
                            }
                            ex = [ex, cn];
                            ex['from'] = FROM;
                            u_ex = "from=" + FROM + u_ex;
                            if (x === true) return u_ex;
                            else return ex;
                        },
                        sendDataForm: function(data, mode) {
                            document.getElementById("send_form").classList.add("button_disable");
                            let xhr = getXmlHttp();
                            xhr.onreadystatechange = function() {
                                console.log(this)
                                if (this.readyState == 4) {                                    
                                    if(this.response){
                                        if (this.response.code == 1) {
                                            document.querySelector(".step-line").style.display = "none";
                                            let n = Number(document.querySelector(".step-window_action").id.split("_")[1])+1;
                                            document.querySelector(".step-window_action").classList.remove("step-window_action");
                                            document.getElementById("step-window_"+n).classList.add("step-window_action");
                                            document.getElementById("step-window_"+n).classList.add("form_set-status_done");
                                        } else {
                                            document.querySelector(".step-line").style.display = "none";
                                            let n = Number(document.querySelector(".step-window_action").id.split("_")[1])+1;
                                            document.querySelector(".step-window_action").classList.remove("step-window_action");
                                            document.getElementById("step-window_"+n).classList.add("step-window_action");
                                            document.getElementById("step-window_"+n).classList.add("form_set-status_error");
                                        }
                                    }else{
                                        document.querySelector(".step-line").style.display = "none";
                                        let n = Number(document.querySelector(".step-window_action").id.split("_")[1])+1;
                                        document.querySelector(".step-window_action").classList.remove("step-window_action");
                                        document.getElementById("step-window_"+n).classList.add("step-window_action");
                                        document.getElementById("step-window_"+n).classList.add("form_set-status_error");
                                    }
                                }
                            }
                            xhr.open('POST', '/calculation-s', true);
                            xhr.responseType = 'json';
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.setRequestHeader('x-requested-with', "XMLHttpRequest");
                            xhr.send(data);
                        },
                        backToForm: function(){
                           let swa = this.closest(".step-window_action");
                            swa.classList.remove("form_set-status_error");
                            swa.classList.remove("step-window_action");
                           let n = Number(swa.id.split("_")[1])-1;
                            document.getElementById("send_form").classList.remove("button_disable");
                           document.getElementById("step-window_"+n).classList.add("step-window_action");
                            document.querySelector(".step-line").style.display = "flex";
                        },
                        controlPhone: function(mode) {
                            if (mode == "input") {
                                let in_val = this.value;
                                if (in_val.length === 11 && in_val[0] === '7') in_val = '+' + in_val;
                                let dirt_val = /^(\+?)(.*)$/.exec(in_val);
                                let ps = !!dirt_val[1].length ? '+' : '';
                                let clear_val = dirt_val[2].replace(/[^\d]/ig, "");
                                let ex_val = '';
                                if ((ps == '+' && clear_val[0] == '7') || (ps == '' && clear_val[0] == '8')) {
                                    ex_val = in_val;
                                    let b = (ps && clear_val[0] == '7') ? "+7" : "8";
                                    switch (clear_val.length) {
                                        case 0:
                                            ex_val = ps;
                                            break;
                                        case 1:
                                        case 2:
                                        case 3:
                                            if (b == '8') {
                                                a = /^(\d{1,2})(\d{1})?$/ig.exec(clear_val);
                                                ex_val = ps + a[1] + (a[2] !== undefined ? '-' + a[2] : '');
                                                break;
                                            }
                                        case 4:
                                            a = /^(\d{1})(\d{1,3})?$/ig.exec(clear_val);
                                            ex_val = ps + a[1] + (a[2] !== undefined ? ' ' + a[2] : '');
                                            break;
                                        case 5:
                                        case 6:
                                        case 7:
                                            a = /^(\d{1})(\d{3})(\d{1,3})?(\d{1,2})?(\d{1,2})?$/ig.exec(clear_val);
                                            ex_val = ps + a[1] + ' (' + a[2] + ') ';
                                            for (let i = 3; i < a.length; i++) {
                                                if (a[i] === undefined) break;
                                                ex_val += a[i];
                                            }
                                            break;
                                        case 8:
                                        case 9:
                                        case 10:
                                        case 11:
                                            a = /^(\d{1})(\d{3})(\d{3})?(\d{1,2})?(\d{1,2})?$/ig.exec(clear_val);
                                            ex_val = ps + a[1] + ' (' + a[2] + ') ' + a[3];
                                            for (let i = 4; i < a.length; i++) {
                                                if (a[i] === undefined) break;
                                                ex_val += '-' + a[i];
                                            }
                                            break;
                                        default:
                                            a = /^(\d{1})(\d+)$/ig.exec(clear_val);
                                            ex_val = ps + a[1] + " " + a[2];
                                            break;
                                    }
                                } else {
                                    let a;
                                    switch (clear_val.length) {
                                        case 0:
                                            ex_val = ps;
                                            break;
                                        case 1:
                                        case 2:
                                        case 3:
                                        case 4:
                                        case 5:
                                            a = /^(\d{1})(\d{1,2})?(\d{1,2})?$/ig.exec(clear_val);
                                            ex_val = ps + a[1];
                                            for (let i = 2; i < a.length; i++) {
                                                if (a[i] === undefined) break;
                                                ex_val += "-" + a[i];
                                            }
                                            break;
                                        case 6:
                                        case 7:
                                            a = /(\d{2,3})(\d{2})(\d{2})/ig.exec(clear_val);
                                            ex_val = ps + a[1];
                                            for (let i = 2; i < a.length; i++) {
                                                if (a[i] === undefined) break;
                                                ex_val += "-" + a[i];
                                            }
                                            break;
                                        case 8:
                                        case 9:
                                        case 10:
                                            a = /^(\d{3})(\d{3})(\d{2})(\d{1,2})?$/ig.exec(clear_val);
                                            if (ps == '') ex_val = '(' + a[1] + ') ' + a[2];
                                            else ex_val = '+' + a[1] + ' ' + a[2];

                                            for (let i = 3; i < a.length; i++) {
                                                if (a[i] === undefined) break;
                                                ex_val += "-" + a[i];
                                            }
                                            break;
                                        default:
                                            a = /^(\d{1})(\d+)$/ig.exec(clear_val);
                                            ex_val = ps + a[1] + " " + a[2];
                                            break;
                                    }
                                }
                                this.value = ex_val;
                            }
                            if (mode == "keydown") {
                                let val = /^(\+?)(.*)$/.exec(this.value);
                                let ps = !!val[1].length;
                                val = val[2].replace(/[^\d]/ig, "");
                                if (event.key == "+") {
                                    return true;
                                }
                                if (!/^\d*$/ig.test(val + event.key)) {
                                    event.preventDefault();
                                    return false;
                                }
                            }
                        },
                        controlName: function(mode) {
                            if (mode == "input") {
                                let val = this.value;
                                val = val.replace(/[^\s\-A-ZА-Я]/gi, '');
                                val = val.replace(/(\-\-)|(\s\-)|(\-\s)|(\s\s)/g, '');
                                val = val.replace(/^((\-)|(\s))?(.*)$/g, '$4');
                                val = val.split(" ");
                                for (let i = 0; i < val.length; i++) {
                                    if (val[i][0] === undefined) break;
                                    val[i] = val[i][0].toUpperCase() + val[i].substring(1);
                                }
                                val = val.join(" ");
                                this.value = val;
                            }
                            if (mode == "keydown") {
                                let val = this.value;
                                if (!/^[\s\-A-ZА-Я]*$/ig.test(val + event.key)) {
                                    event.preventDefault();
                                    return false;
                                }
                                if (/(\-\-)|(\s\-)|(\-\s)|(\s\s)/g.test(val + event.key)) {
                                    event.preventDefault();
                                    return false;
                                }
                                if (val.length == 0 && (event.key == " " || event.key == "-")) {
                                    event.preventDefault();
                                    return false;
                                }
                            }
                            if (mode == "blur") {
                                this.value = this.value.replace(/^(.*?)((\-)|(\s))?$/g, '$1');
                            }
                        },
                        controlEmail: function(mode) {
                            let val = this.value;
                            let text = "Введите корректный email.";
                            if (mode == "input") {
                                if (/[\,]/ig.test(val) || /^((\@)|(\.))/ig.test(val)) {
                                    aW.bind(this, text)();
                                } else {
                                    this.closest(".option__line_input").classList.remove("option__line_s_warn");
                                }
                            }
                            if (mode == "blur") {
                                if (!/^$/i.test(val) && (/[\,]/ig.test(val) || /^((\@)|(\.))/i.test(val) || /((\@)|(\.))$/i.test(val) || !/[\@]/ig.test(val))) {
                                    aW.bind(this, text)();
                                } else {
                                    this.closest(".option__line_input").classList.remove("option__line_s_warn");
                                }
                            }

                            function aW(text) {
                                this.closest(".option__line_input").querySelector(".option__warn").innerText = text
                                this.closest(".option__line_input").classList.add("option__line_s_warn");
                            }
                        }


                    }
                };
                for (let prop in formSS)
                    formSS[prop].root = formSS;
                return formSS;
            }());
            el = document.querySelectorAll(".option");
            for (let i = 0; i < el.length; i++) {
                formSS[el[i].dataset.f].a(el[i]);
            }
            el = document.querySelectorAll(".button_next");
            for (let i = 0; i < el.length; i++) {
                el[i].onclick = function() {
                    if (this.classList.contains("button_disable")) return true;
                    let w = this.closest("." + formSS.ns.NS);
                    formSS[w.querySelector(".option").dataset.f].b(w);
                }
            }
            FORM_SUBMIT.onclick = function() {
                let w = this.closest("." + formSS.ns.NS);
                formSS[w.querySelector(".option").dataset.f].b(w);
            }
//            re-send
            el = document.querySelectorAll(".re-send");
            for (let i = 0; i < el.length; i++) {
                el[i].onclick = function() {
                    formSS.fn.backToForm.bind(this)();
                }
            }
            el = document.querySelectorAll(".step-line__step");
            for (let i = 0; i < el.length; i++) {
                el[i].onclick = function() {
                    if ((this.classList.contains("step-line__step_current") && this.classList.contains("step-line__step_action")) || this.classList.contains("step-line__step_action")) {
                        return true;
                    }
                    if (this.classList.contains("step-line__step_current") || this.classList.contains("step-line__step_completed")) {
                        formSS.fn.gFormWindow.bind(this)();
                    }
                }
            }
        });
        function getXmlHttp() {
            var xmlhttp;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            return xmlhttp;
        };