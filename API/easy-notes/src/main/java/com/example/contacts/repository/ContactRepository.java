package com.example.contacts.repository;

import com.example.contacts.model.Contacts;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface ContactRepository extends JpaRepository<Contacts, Long> {
    @Query("SELECT t FROM Contacts t where t.user_id = :user_id")
    Contacts findTitleById(@Param("user_id") Long id);

    @Query("SELECT t FROM Contacts t where t.user_id = :user_id")
    List<Contacts> findListById(@Param("user_id") Long id);
}
