package com.example.contacts.model;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import org.hibernate.annotations.NaturalId;
import org.springframework.data.annotation.CreatedDate;
import org.springframework.data.jpa.domain.support.AuditingEntityListener;
import javax.persistence.*;
import javax.validation.constraints.NotBlank;
import java.io.Serializable;
import java.util.Date;

@Entity
@Table(name = "contacts")
@EntityListeners(AuditingEntityListener.class)
@JsonIgnoreProperties(value = {"createdAt", "updatedAt"},
        allowGetters = true)
public class Contacts implements Serializable {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long contact_id;

    @NaturalId
    private Long user_id;

    @NotBlank(message = "Please enter first name")
    private String first_name;

    @NotBlank(message = "Please enter last name")
    private String last_name;

    @NotBlank(message = "Please enter email")
    private String email;

    @NotBlank(message = "Please enter phone number")
    private String phone_number;

    @NotBlank(message = "Please enter city")
    private String city;

    @NotBlank(message = "Please enter state")
    private String state;

    @NotBlank(message = "Please enter address")
    private String address;

    @Column(nullable = false, updatable = false)
    @Temporal(TemporalType.TIMESTAMP)
    @CreatedDate
    private Date date_added;


    public Long getContact_id() {
        return contact_id;
    }

    public Long getUser_id() {
        return user_id;
    }

    public void setUser_id(Long user_id) {
        this.user_id = user_id;
    }

    public String getLast_name() {
        return last_name;
    }

    public void setLast_name(String last_name) {
        this.last_name = last_name;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPhone_number() {
        return phone_number;
    }

    public void setPhone_number(String phone_number) {
        this.phone_number = phone_number;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getState() {
        return state;
    }

    public void setState(String state) {
        this.state = state;
    }


    public String getFirst_name() { return first_name; }

    public void setFirst_name(String first_name) {
        this.first_name = first_name;
    }


    public String getAddress() {
        return address;
    }

    public void setAddress(String name) {
        this.address = name;
    }
}
