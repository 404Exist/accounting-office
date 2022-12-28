import 'bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import './bootstrap';

AOS.init({
    once: true,
    duration: 1200,
});


window.onload = () => document.getElementById("pageLoader").classList.add("hide-loader")
