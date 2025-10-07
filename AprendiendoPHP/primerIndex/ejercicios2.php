<?php
/*
## 1- Banner de bienvenida
Declara variables de nombre, islogged (si el usuario está loggeado o no) y Shour (hora de 0 a 23), y muestra en HTMl un div con el siguiente contenido:
- título con: "Hola, §nombre"
- parrafo con:
- "Buenos días" si la hora es menor a 12 y mayor a 6.
- "Buenas tardes" si la hora está entre hour >= 12 y hora < 20
- "Buenas noches" si la hora es mayor a 20 y y antes de las 6.
- Si no está loggeado, muestra un botón que ponga "Iniciar sesión" (El botón no es funcional).
## 2- Contenedores de productos con stock
Crea un array de productos. Cada producto tiene la siguiente estructura:
- id=>..
- name=>..
- price»>..
- stock=>..
Crea en el HTML div's, que muestren todo el contenido de productos. Es decir, un div por cada producto.
- Si stock es igual a ® (igualdad de tipo y dato) añade un span tag dentro del div que ponga "Sin stock".
- Si el stock es mayor o igual a 100 (igualdad de tipo y dato) añade un span tag dentro del div que ponga
premium.

*/