####Diagrama de actividad

@startuml
[*] --> NoRegistrado

NoRegistrado --> Autenticado : Autenticación exitosa
NoRegistrado --> NoRegistrado : Autenticación fallida

Autenticado --> SeleccionandoCursos

SeleccionandoCursos --> ErrorValidación : Cursos inválidos
SeleccionandoCursos --> CursosSeleccionados : Cursos válidos

CursosSeleccionados --> ConfirmandoMatricula

ConfirmandoMatricula --> Autenticado : Cancelar
ConfirmandoMatricula --> MatriculaRegistrada : Confirmar

MatriculaRegistrada --> MatriculaRegistrada : Pago pendiente
MatriculaRegistrada --> MatriculaCompletada : Pago exitoso

MatriculaCompletada --> [*]

ErrorValidación --> SeleccionandoCursos : Corregir selección
@enduml
