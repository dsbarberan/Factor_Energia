#Prueba técnica Dani Soriano 

#Desarrollo de una API de consulta de datos de Stack Overflow

Objetivo: El propósito de esta prueba es evaluar tus habilidades en el desarrollo de APIs REST
utilizando PHP y en la interacción con bases de datos y servicios de terceros.
Duración: 3 horas.
Instrucciones detalladas:
1. Configuración Inicial:
• Crea un nuevo repositorio en GitHub específicamente para esta tarea.
• Selecciona uno de los siguientes frameworks para desarrollar tu API en PHP: Yii2,
Symfony o Laravel.
2. Desarrollo de la API:
Implementa un endpoint que permita obtener datos sobre las preguntas de los foros de Stack
Overflow. Debes hacer uso de la API pública proporcionada: API Stack Exchange - Questions.
https://api.stackexchange.com/docs/questions
El endpoint desarrollado debe admitir los siguientes filtros:
2
• Tagged: Filtro obligatorio.
• Todate: Filtro opcional.
• Fromdate: Filtro opcional.
3. Integración con Base de Datos:
Crea una base de datos que permita almacenar las respuestas obtenidas de la API pública de
Stack Overflow.
Implementa una funcionalidad que almacene las consultas realizadas y sus respectivos
resultados en la base de datos. Esto facilitará la recuperación rápida de datos previamente
solicitados sin tener que hacer una nueva petición a la API externa.
Asegúrate de que la base de datos esté correctamente estructurada para optimizar las consultas
y evitar datos redundantes.
4. Documentación y Finalización:
Incluye en el repositorio un archivo README que explique brevemente la estructura del proyecto,
cómo configurarlo, cómo ejecutarlo y cómo utilizar el endpoint desarrollado.
Proporciona detalles sobre cómo se puede acceder y consultar la base de datos.
Una vez que hayas completado la prueba, comparte con nosotros el enlace al repositorio de
GitHub para que podamos revisar y evaluar tu trabajo.
Consejos adicionales:
• Prioriza la legibilidad y la organización del código.
• Maneja adecuadamente los errores y las respuestas del servidor.
• Si dispones de tiempo adicional, considera implementar características adicionales o
mejorar la eficiencia del sistema


Exsiten 2 endpoints uno para mostrar la informacion pasandole el filtro--> .../api/items
Y el otro seria el de guardado en la base de datos--> .../api/itemsBD
Actualmente la base de datos guarda solo la tabla "items", se podria modificar para que guardara los "owners" y el campo "type".