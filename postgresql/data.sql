-- Insertar cursos (10 cursos)
INSERT INTO cursos (nombre, descripcion, creditos, created_at, updated_at) VALUES
('Matemáticas I', 'Curso introductorio de matemáticas', 5, NOW(), NOW()),
('Física I', 'Principios básicos de física', 4, NOW(), NOW()),
('Química I', 'Fundamentos de química', 4, NOW(), NOW()),
('Programación I', 'Introducción a la programación', 6, NOW(), NOW()),
('Inglés I', 'Curso básico de inglés', 3, NOW(), NOW()),
('Historia', 'Historia mundial contemporánea', 3, NOW(), NOW()),
('Literatura', 'Estudio de la literatura clásica', 3, NOW(), NOW()),
('Biología', 'Fundamentos de biología', 4, NOW(), NOW()),
('Estadística', 'Conceptos básicos de estadística', 5, NOW(), NOW()),
('Educación Física', 'Desarrollo físico y salud', 2, NOW(), NOW());

-- Insertar estudiantes (20 estudiantes)
INSERT INTO estudiantes (nombre, apellido, telefono, email, created_at, updated_at) VALUES
('Carlos', 'Alburez', '5551000001', 'carlos.alburez@email.com', NOW(), NOW()),
('Ana', 'Gómez', '5551000002', 'ana.gomez@email.com', NOW(), NOW()),
('Luis', 'Martínez', '5551000003', 'luis.martinez@email.com', NOW(), NOW()),
('María', 'Rodríguez', '5551000004', 'maria.rodriguez@email.com', NOW(), NOW()),
('José', 'López', '5551000005', 'jose.lopez@email.com', NOW(), NOW()),
('Sofía', 'Pérez', '5551000006', 'sofia.perez@email.com', NOW(), NOW()),
('Miguel', 'Ramírez', '5551000007', 'miguel.ramirez@email.com', NOW(), NOW()),
('Laura', 'Torres', '5551000008', 'laura.torres@email.com', NOW(), NOW()),
('Pedro', 'Flores', '5551000009', 'pedro.flores@email.com', NOW(), NOW()),
('Elena', 'Vargas', '5551000010', 'elena.vargas@email.com', NOW(), NOW()),
('David', 'Sánchez', '5551000011', 'david.sanchez@email.com', NOW(), NOW()),
('Paula', 'Castillo', '5551000012', 'paula.castillo@email.com', NOW(), NOW()),
('Juan', 'Mendoza', '5551000013', 'juan.mendoza@email.com', NOW(), NOW()),
('Isabel', 'Ortiz', '5551000014', 'isabel.ortiz@email.com', NOW(), NOW()),
('Andrés', 'Ruiz', '5551000015', 'andres.ruiz@email.com', NOW(), NOW()),
('Verónica', 'Núñez', '5551000016', 'veronica.nunez@email.com', NOW(), NOW()),
('Ricardo', 'Salazar', '5551000017', 'ricardo.salazar@email.com', NOW(), NOW()),
('Claudia', 'Guzmán', '5551000018', 'claudia.guzman@email.com', NOW(), NOW()),
('Fernando', 'Rojas', '5551000019', 'fernando.rojas@email.com', NOW(), NOW()),
('Natalia', 'Mora', '5551000020', 'natalia.mora@email.com', NOW(), NOW());

-- Insertar relaciones (inscripciones)

INSERT INTO curso_estudiantes (curso_id, estudiante_id, created_at, updated_at) VALUES
(1, 1, NOW(), NOW()),
(2, 1, NOW(), NOW()),
(4, 1, NOW(), NOW()),
(5, 2, NOW(), NOW()),
(7, 2, NOW(), NOW()),
(3, 3, NOW(), NOW()),
(8, 4, NOW(), NOW()),
(9, 5, NOW(), NOW()),
(2, 5, NOW(), NOW()),
(6, 6, NOW(), NOW()),
(10, 7, NOW(), NOW()),
(1, 8, NOW(), NOW()),
(5, 9, NOW(), NOW()),
(4, 10, NOW(), NOW()),
(3, 11, NOW(), NOW()),
(2, 12, NOW(), NOW()),
(7, 13, NOW(), NOW()),
(8, 14, NOW(), NOW()),
(9, 15, NOW(), NOW()),
(10, 16, NOW(), NOW()),
(1, 17, NOW(), NOW()),
(6, 18, NOW(), NOW()),
(5, 19, NOW(), NOW()),
(4, 20, NOW(), NOW());
