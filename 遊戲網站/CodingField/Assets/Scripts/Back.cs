using UnityEngine;
using System.Collections;

public class Back : MonoBehaviour {

    public GameObject BackObject;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        BackObject.SetActive(true);
    }

    public void disappear()
    {
        BackObject.SetActive(false);
    }
}