#                               UNIVERSIDAD ESTATL DE BOLIVAR 
#               FACULTAD DE CIENCAS ADMINISTRATIVAS GESTION EMPRESARIAL E INFORMATICA 
# INTEGRANTES : ARMIJOS DORIAN , SINCHE HENRY
# TEMA : PAE FINAL
# Para realizar esta programcion se toma en cuenta los diseños establecidos anteriormente y se realizido
# la aplicacion de una libreria que se llama San Pedro esta tenia requerimientos especificos que se intento cumplir
# por ello se realizo mediante un patron de diseño como es MVC el modelo vista controlador revisado en clases este tiene
# la caracteristica de comicarse con el cliente mediante peticiones y mostrar la vista segun peticion realiza donde el router  
# tiene la obligacion de enviar dichas rutas con las vistas hacia un View Controller y el es el encargado de mostrar las vistas
# que se desea visualizar estos parametros estan cumplidos en el trabajo PAE
# 1. Se instancio un index el que toma las peticiones y envia hacia el Router
# 2. Se creo un Router donde toma las peticiones que envia el index y este asu ves decide que vista debe mostrarse  
# 3. Se creo un ViewController que es el enccargado de mostrar las vistas que el Router le pide 
# 4. Ademas se creo Visatas diferentes como son las de Clientes, Administrador 
# 5. Cada Una de estas vistas comprende a mas vistas
# 6. Se realizo formularios los cuales envian los datos de los clientes hacia el backend mediante el metodo POST  
# 7. Se realizo una gestion de ingreso para clientes mediante objetos realizando el envio de la informcion hacia la base de datos
# 8. Por esa razon instanciamos una Conexion a la base de datos "libreria" la cual es la encargada de guardar  informacion enviada desde el objeto cliente
# 9.Se realizo el Registro Usuario que envia los datos hacia los objetos 
# 10. Se realizo la validacion de la contraseña mediante un script el mismo que restringe una cantidad minima de caracteres que debe la contraseña 
# 10. Se realizo la verificacion de Usuario registrado mediante PHP utilizando $_SESSION y verificando en la bese de Datos y si coincide ingresa al sistema caso contrario tiene que registrars
###### ##################################################IMPORTANTE #############################################################################################3
## los metodos de CRUD de los libros los gestiona el administrador para acceder a ese especifico tiene que ingresar con un usuario y contraseña 
#   ---------------usuario---------- admin
# -----------------contraseña------- admin
# Para ello tiene que segui esta ruta http://localhost/ProjectBiblioteca/Admin 
# si importa la base de datos no deberia de haber problemas creo se encuentra ubicado el mismo nivel que el index.php se llama libreria sql
### ###############################################################################################################################################################

#                                               GRACIAS ESE ES NUESTRO TRABAJO                                                              

### ###############################################################################################################################################################