CREATE TABLE user_credentials(
    user_id UUID PRIMARY KEY NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    other_name VARCHAR(30),
    last_name VARCHAR(30) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAF(8) NOT NULL CHECK(gender = 'Male' OR gender = 'Female')
    email VARCHAR(100) NOT NULL UNIQUE,
    residence VARCHAR(30) NOT NULL,
    phone TEXT CHECK(LENGTH(phone) = 10) UNIQUE,
    other_phone TEXT CHECK(LENGTH(phone) = 10),
    staff_id VARCHAR(20) UNIQUE NOT NULL,
    department INT REFERENCES departments(department_id) NOT NULL
)

CREATE TABLE departments(
    department_id SERIAL PRIMARY KEY NOT NULL,
    department VARCHAR(30) NOT NULL
)