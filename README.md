# Practica04-Mi-Correo-Electr-nico
Reunion
  	VICERRECTORADO DOCENTE 	Código: GUIA-PRL-001 
	CONSEJO ACADÉMICO 	Aprobación: 2016/04/06 
Formato: Guía de Práctica de Laboratorio / Talleres / Centros de Simulación 
 
PRÁCTICA DE LABORATORIO 
 
 
CARRERA: INGENIERIA DE SISTEMA/COMPUTACION 	ASIGNATURA: HIPERMEDIAL 
NRO. PRÁCTICA: 	4 	TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL 
OBJETIVO  
•	Entender y organizar de una mejor manera los sitios de web en Internet
•	Diseñar adecuadamente  elementos gráficos en sitios web en Internet. 
•	Crear sitios web aplicando estándares actuales.  
INSTRUCCIONES  	 

Conexion con la base de Datos 

 

Boton eliminar: Cargar datos de objeto seleccionado. 

 




Listado  de clientes agregados desde la pagina Web 


Cambiar contraseña: cargar datos y redirecciona al usuario seleccionado.

 
Con base al archivo PHP (Apuntes y ejercicios), se pide realizar los siguientes ajustes: 
 
a)	Agregar roles a la tabla usuario. Un usuario puede tener un rol de “admin” o 
“user” 
b)	Los usuarios con rol de “admin” pueden: modificar, eliminar y cambiar la contraseña de cualquier usuario de la base de datos. 
c)	Los usuarios con rol de “user” pueden modificar, eliminar y cambiar la contraseña de su usuario. 
 
Luego, con base a estos ajustes realizados, se pide desarrollar una aplicación web usando PHP y Base de Datos que permita gestionar reuniones entre usuarios de la aplicación. De las reuniones se desea conocer la fecha y hora, lugar, coordenadas (latitud y longitud) remitente (quien invita), invitados (quienes asisten), motivo de la reunión y observaciones.  
 
Para lo cuál, se pide como mínimo los siguientes requerimientos: 
 
Usuario con  rol de user: 
 
d)	Visualizar en su pagina principal (index.php) el listado de todas las reuniones agendadas, ordenados por las más recientes. 
e)	Crear reuniones e invitar a otros usuarios de la aplicación web. 
f)	Buscar en las reuniones agendadas. La búsqueda se realizará por el motivo de la reunión y se deberá aplicar Ajax para la búsqueda. 
g)	Modificar los datos del usuario. 
h)	Cambiar la contraseña del usuario. 
 
Usuario con rol de admin: 
 
i)	No puede recibir ni invitar a reuniones. 
j)	Visualizar en su pagina principal (index.php) el listado de todas las reuniones existentes, ordenados por los más recientes. 
k)	Eliminar las reuniones de los usuarios con rol “user”. 
l)	Eliminar, modificar y cambiar contraseña de los usuarios con rol “user”. 
 
Por último, se debe aplicar parámetros de seguridad a través del uso de sesiones. Para lo cuál, se debe tener en cuenta: 
 
m)	Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede acceder únicamente a los archivos de la carpeta pública. 


 

Diagrama de Clases
![DIAGRAMA REUNION](https://user-images.githubusercontent.com/49736365/69672758-c5d4fd00-1066-11ea-965b-139c084c325e.PNG)

 
  	VICERRECTORADO DOCENTE 	Código: GUIA-PRL-001 
	CONSEJO ACADÉMICO 	Aprobación: 2016/04/06 
Formato: Guía de Práctica de Laboratorio / Talleres / Centros de Simulación 
 
	n)	Un usuario con rol de “admin” puede acceder únicamente a los archivos de la carpeta admin → vista → admin y admin → controladores → admin  
o)	Un usuario con rol de “user” puede acceder únicamente a los archivos de la carpeta admin → vista → user y admin → controladores → user  
 
ACTIVIDADES POR DESARROLLAR  
1. Generar el diagrama E-R para la solución de la práctica 
2. Crear un repositorio en GitHub con el nombre “Practica04 – Mi Correo Electrónico” 
3. Realizar un commit y push por cada requerimiento de los puntos antes descritos. 
4. Luego, se debe crear el archivo README del repositorio de GitHub. 
5. Generar informe de los resultados en el formato de prácticas. Debe incluir: 
a.	El diagrama E-R de la solución propuesta. 
b.	Nombre de la base de datos 
c.	Sentencias SQL de la estructura de la base de datos 
d.	El desarrollo de cada uno de los requerimientos antes descritos.  
e.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos).  
f.	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos. 
g.	El informe debe incluir conclusiones apropiadas.  
h.	En el informe se debe incluir la información de GitHub (usuario y URL del repositorio de la práctica)  i. 	En el informe se debe incluir la firma digital del estudiante. 
6. En el archivo README del repositorio debe constar la misma información del informe de resultados de la práctica que se indica en el punto anterior. 
 
RESULTADO(S) OBTENIDO(S): 
• 	Tener el conocimiento suficiente para que el estudiante pueda entender y organizar de una mejor manera los sitios de web y de negocios en Internet 
 
CONCLUSIONES:  
• 	Los estudiantes podrán organizar sitios web basados en el lenguaje de programación PHP para persistir información en una base de datos relacional. 
 
RECOMENDACIONES:  
	• 	Probar la solución de la práctica en al menos tres navegadores web; Google Chrome, Firefox y Safari 
 
 
 
 
Docente:  Ing. Gabriel León Paredes, PhD. 
Firma:   
 
Resolución CS N° 076-04-2016-04-20 
 
