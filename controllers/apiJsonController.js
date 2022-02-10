const controller = {};

const fs = require('fs');
const path = require('path');
const ObjInfo = {
            about: '¡El plan de tonificación para Rafael Ramon Bastidas Lameda está listo!',
            initial: {
                urlImg: 'https://picsum.photos/75/256',
                title: 'Ahora',
                items: [
                    {name: 'Grasa corporal', value:'20-24%'},
                    {name: 'Músculos del cuerpo', value:'10-12%'}
                ]
            },
            final: {
                urlImg: 'https://picsum.photos/75/256',
                title: '6 meses',
                items: [
                    {name: 'Grasa corporal', value:'10-12%'},
                    {name: 'Músculos del cuerpo', value:'20-21%'}
                ]
            },
            difficulty: [
                {nivel: 'Principiante', video: "https://www.youtube-nocookie.com/embed/egT5ziBD9og"},
                {nivel: 'Intermedio', video: "https://www.youtube-nocookie.com/embed/cyPd0CP5TMg"},
                {nivel: 'Avanzado', video: "https://www.youtube-nocookie.com/embed/3yHLpmGWRW0"}
            ],
            goal: [
                'Mejorar el sueño'
            ],
            plan: [
                {
                    urlImg: 'https://picsum.photos/180/318',
                    title: '6 meses',
                    items: [
                        'Consigue tu objetivo',
                        'Cambia tu vida para siempre'
                    ]
                },
                {
                    urlImg: 'https://picsum.photos/290/420',
                    title: '3 meses',
                    items: [
                        'Pierde el exceso de grasa corporal',
                        'Mejora la intensidad de tus entrenamientos',
                        'Comprueba resultados a mitad de camino'
                    ]
                },
                {
                    urlImg: 'https://picsum.photos/180/318',
                    title: '1 mes',
                    items: [
                        'Construye un hábito',
                        'Crea correctas técnicas para ejercitarte',
                        'Primeras transformaciones'
                    ]
                },
            ]
        }

controller.getJson = (req, res) => {
    res.json(results);
};

module.exports = controller;
