package com.example.contacts.controller;

import com.example.contacts.exception.ResourceNotFoundException;
import com.example.contacts.model.Contacts;
import com.example.contacts.model.Users;
import com.example.contacts.repository.ContactRepository;
import com.example.contacts.repository.UsersRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import javax.validation.Valid;
import java.util.List;

@RestController
@RequestMapping("/api")
public class ContactController {

    @Autowired
    ContactRepository contactRepository;

    @Autowired
    UsersRepository userRepository;

    // Get All Contacts
    @CrossOrigin
    @GetMapping("/contact")
    public List<Contacts> getAllContacts() {
        return contactRepository.findAll();
    }

    // Create a new Contact
    @CrossOrigin
    @PostMapping("/contact")
    public Contacts createContact(@Valid @RequestBody Contacts test) {
        return contactRepository.save(test);
    }


    // Get list of contacts by user_id
    @CrossOrigin
    @GetMapping("/contact/{user_id}")
    public List<Contacts> findUserById(@PathVariable("user_id") Long user_id) {
        return contactRepository.findListById(user_id);
    }

    // Update a Contact
    @CrossOrigin
    @PutMapping("/contact/{id}")
    public Contacts updateContact(@PathVariable(value = "id") Long testId,
                                  @Valid @RequestBody Contacts testDetails) {

        Contacts contact = contactRepository.findById(testId)
                .orElseThrow(() -> new ResourceNotFoundException("Note", "id", testId));

        contact.setFirst_name(testDetails.getFirst_name());
        contact.setLast_name(testDetails.getLast_name());
        contact.setEmail(testDetails.getEmail());
        contact.setPhone_number(testDetails.getPhone_number());
        contact.setCity(testDetails.getCity());
        contact.setState(testDetails.getState());
        contact.setAddress(testDetails.getAddress());

        Contacts updatedContact = contactRepository.save(contact);
        return updatedContact;
    }

    // Delete a Contact by contact_id (contact_id = unique sql id)
    // change to something else later on
    @CrossOrigin
    @DeleteMapping("/contact/{contact_id}")
    public ResponseEntity<?> deleteContact(@PathVariable(value = "contact_id") Long contact_id) {
        Contacts test = contactRepository.findById(contact_id).orElseThrow(() -> new ResourceNotFoundException("Note", "id", contact_id));
        contactRepository.delete(test);

        return ResponseEntity.ok().build();
    }

    // Get All Users
    @CrossOrigin
    @GetMapping("/contact/user")
    public List<Users> getUsers() {return userRepository.findAll();
    }

    // Create a new User
    @CrossOrigin
    @PostMapping("/contact/user")
    public Users createUser(@Valid @RequestBody Users user) {
        return userRepository.save(user);
    }

    // Delete a user
    @CrossOrigin
    @DeleteMapping("/contact/user/{user_id}")
    public ResponseEntity<?> deleteUser(@PathVariable(value = "user_id") Long user_id) {
        // won't work without throw exception, weird
        Users user = userRepository.findById(user_id).orElseThrow(() -> new ResourceNotFoundException("Note", "id", user_id));
        userRepository.delete(user);

        return ResponseEntity.ok().build();
    }
    // Update a User
    @CrossOrigin
    @PutMapping("/contact/user/{user_id}")
    public Users updateContact(@PathVariable(value = "user_id") Long testId,
                               @Valid @RequestBody Users testDetails) {

        Users user = userRepository.findById(testId).orElseThrow(() -> new ResourceNotFoundException("Note", "id", testId));

        user.setUsername(testDetails.getUsername());
        user.setPassword(testDetails.getPassword());

        Users updatedContact = userRepository.save(user);
        return updatedContact;
    }

}
