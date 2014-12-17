package com.datastructures;

/**
 * Created by ray on 10/11/14.
 */
public class VolunteerRequest {
    private String name;
    private String description;
    private String date;
    private String location;
    private String status;
    private String priority;

    public VolunteerRequest(String aName, String desc, String aDate, String aLocation, String prior) {
        name = aName;
        description = desc;
        date = aDate;
        location = aLocation;
        status = "New";
        priority = prior;

    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getPriority() {
        return priority;
    }

    public void setPriority(String priority) {
        this.priority = priority;
    }

    @Override
    public String toString() {
        return "VolunteerRequest{" +
                "name='" + name + '\'' +
                ", description='" + description + '\'' +
                ", date='" + date + '\'' +
                ", location='" + location + '\'' +
                ", status='" + status + '\'' +
                ", priority='" + priority + '\'' +
                '}';
    }
}
