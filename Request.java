/**
 * Created by ray on 10/10/14.
 */
import java.util.Random;

public class Request {
    private int quantity;
    private String location;
    private String name;
    private int priority;
    private String catagory;
    private String volume;
    private static int id;
    private String description;
    private String status;

    private Request(String aName, String aDesc, String aLocation, int quan){
        name = aName;
        description = aDesc;
        location = aLocation;
        quantity = quan;
        priority = 3;
        catagory = "TBD";
        volume = "TBD";
        id = 1; //This number doesn't represent actual ID. I put here for future use.
        status = "New";

    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getPriority() {
        return priority;
    }

    public void setPriority(int priority) {
        this.priority = priority;
    }

    public String getCatagory() {
        return catagory;
    }

    public void setCatagory(String catagory) {
        this.catagory = catagory;
    }

    public String getVolume() {
        return volume;
    }

    public void setVolume(String volume) {
        this.volume = volume;
    }

    public static int getId() {
        return id;
    }

    public static void setId(int id) {
        Request.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    @Override
    public String toString() {
        return "Request{" +
                "quantity=" + quantity +
                ", location='" + location + '\'' +
                ", name='" + name + '\'' +
                ", priority=" + priority +
                ", catagory='" + catagory + '\'' +
                ", volume='" + volume + '\'' +
                ", description='" + description + '\'' +
                ", status='" + status + '\'' +
                '}';
    }
}
